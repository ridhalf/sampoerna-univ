<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('viewAny',Auth::user());
        return view('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->authorize('viewAny',Auth::user());
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $this->authorize('create',Auth::user());

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();
        return response()->json(['success' => 'User added successfully.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $this->authorize('viewAny',Auth::user());
        return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        $this->authorize('update',Auth::user());

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =Hash::make($request->password);
        $user->status = $request->status;
        $user->role = $request->role;
        $user->save();
        return response()->json(['success' => 'User updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $this->authorize('update',Auth::user());
        
        if($user->role == 'SUPER ADMIN')
        {
            return response()->json(['errors' => $user->name.' As a Super Admin, you do not have permission to delete this item'],403);
        }
        $user->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }
    public function datatable(Request $request)
    {
        $this->authorize('viewAny',Auth::user());
        $users = User::select('id','name','email','status','role');
        return DataTables::of($users)
            ->addColumn('no', '')
            ->addColumn('action', 'admin.users.action')
            ->rawColumns(['action'])
            ->make(true);
    }
}
