<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Policies\UserPolicy;
use App\Rules\NonEmptyDescription;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $connection = DB::connection()->getDriverName();
        if($connection == 'sqlite'){
            $years = Article::selectRaw('strftime("%Y", created_at) as year')
                ->distinct()
                ->orderBy('year')
                ->pluck('year');
        }else{
        $years = Article::select(DB::raw('YEAR(created_at) as year'))
            ->groupBy('year')
            ->orderBy('year')
            ->pluck('year');
        }
        $articles = Article::all();
        $months = [
            1 => 'January',
            2 => 'February',
            3 => 'March',
            4 => 'April',
            5 => 'May',
            6 => 'June',
            7 => 'July',
            8 => 'August',
            9 => 'September',
            10 => 'October',
            11 => 'November',
            12 => 'December',
        ];
        return view('admin.articles.index', compact('articles','years','months'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $clean_desc =strip_tags($request->description);
        $excerpt = substr($clean_desc, 0, 50);
        if (strlen($clean_desc) > 50) {
            $excerpt .= '...';
        }
        $article = new Article();
        $article->title = $request->title;
        $article->slug = SlugService::createSlug(Article::class,'slug',$request->title);
        $article->category = $request->category;
        $article->short_description = $excerpt;
        $article->description = $request->description;
        $article->image = $request->file('image')->store('images');
        $article->is_published = $request->is_published;
        $article->published_at = Carbon::now();
        $article->save();
        return response()->json(['success' => 'Article added successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('admin.articles.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $clean_desc =strip_tags($request->description);
        $excerpt = substr($clean_desc, 0, 50);
        if (strlen($clean_desc) > 50) {
            $excerpt .= '...';
        }
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($article->image) {
                Storage::delete($article->image);
            }

            // Simpan file baru dan ambil path-nya
            $article->image  = $request->file('image')->store('images');
        }
        $article->title = $request->title;
        $article->slug = Str::slug($request->title);
        $article->category = $request->category;
        $article->short_description = $excerpt;
        $article->description = $request->description;
        $article->is_published = $request->is_published;
        $article->save();
        return response()->json(['success' => 'Article updated successfully.']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        if (Storage::exists($article->image)) {
            Storage::delete($article->image);
        }
        $article->delete();

        return response()->json(['success' => 'Article deleted successfully.']);
    }
    public function datatable(Request $request)
    {
        $articles = Article::join('users', 'users.id', '=', 'articles.author_id')
            ->select('articles.*', 'users.name as author')->orderBy('created_at','DESC');
        $connection = DB::connection()->getDriverName();
        if($connection == 'sqlite'){
            if($request->year != null){
                $articles->where(DB::raw("strftime('%Y', published_at)"), '=', $request->year);
            }
            if ($request->month != null) {
                $articles->where(DB::raw("strftime('%m', published_at)"), '=',
                    str_pad($request->month, 2, '0', STR_PAD_LEFT));
            }
        }else{
            if ($request->year != null) {
                $articles->whereYear('published_at', '=', $request->year);
            }
            if ($request->year != null) {
                $articles->whereYear('published_at', '=', $request->year);
            }
        }
        if ($request->month != null) {
            $articles->where('category', trim(strtolower($request->category)));
        }
        if ($request->is_published != null) {
            $articles->where('is_published', $request->is_published);
        }
        return DataTables::of($articles)
            ->addColumn('no', '')
            ->addColumn('action', 'admin.articles.action')
            ->rawColumns(['action'])
            ->make(true);
    }
}
