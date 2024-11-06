<?php

use App\Http\Controllers\ArticleController;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\UploadedFile;
use \Illuminate\Http\Request;
use \Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $user = \App\Models\User::factory()->create();
    $this->actingAs($user);
});

function data() : array
{
    return [
        'title' => 'Lorem Ipsum',
        'category'=>'news',
        'description'=>'<p>Hello My Name Is John Doe</p>',
        'is_published'=>true,
        'image'=>UploadedFile::fake()->image('image.jpg')
    ];
}
function Store()
{
    $data = data();
    $request = ArticleRequest::create('/articles', 'POST',data());
    $controller = new ArticleController();
    $request->files->set('image', $data['image']);
    $controller->store($request);
    return $data;
}

test('create a article', function () {

    $data = Store();
    $article = Article::first();
    if (Storage::exists($article->image)) {
        Storage::delete($article->image);
    }
    expect($article)->toBeInstanceOf(Article::class)
        ->and($article->title)->toBe($data['title'])
        ->and($article->description)->toBe($data['description'])
        ->and($article->is_published)->toBe(1)
        ->and($article->author_id)->toBe(auth()->user()->id)
        ->and($article->category)->toBe($data['category']);
});
test('update a article', function () {

    $data = Store();

    $data_update = [
        'title' => 'Update title',
        'category'=>'news',
        'description'=>'<p>Hello My Name Is John Doe</p>',
        'is_published'=>false,
        'image'=>UploadedFile::fake()->image('image.jpg')
    ];
    $article = Article::first();
    $request = ArticleRequest::create('/articles/1/update', 'POST',$data_update);
    $controller = new ArticleController();
    $request->files->set('image', $data['image']);
    $controller->update($request, $article);

    if (Storage::exists($article->image)) {
        Storage::delete($article->image);
    }
    $article = Article::first();
    expect($article)->toBeInstanceOf(Article::class)
        ->and($article->title)->toBe($data_update['title'])
        ->and($article->description)->toBe($data_update['description'])
        ->and($article->is_published)->toBe(0)
        ->and($article->author_id)->toBe(auth()->user()->id)
        ->and($article->category)->toBe($data_update['category']);
});
test('delete a article', function () {

    $data = Store();
    $article = Article::first();
    $request = ArticleRequest::create('/articles/1', 'DELETE');
    $controller = new ArticleController();
    $controller->destroy($article);
    $article = Article::first(1);
    Log::info($article);
    expect($article)->toBeNull();
});
