<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Role;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware(['role:admin']);
    }

    public function index(){
        $users = User::all();
        return view('admin.index', compact('users'));
    }

    public function edit($id)
    {
        $user = User::FindOrFail($id);
        $roles = Role::all();
        return view('admin.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->role()->sync($request->roles);
        return redirect()->route('admin.index');
    }

    public function show($id)
    {
        $user = User::find($id);
        $role = Role::find($id);
        return view('admin.show', compact('user','role'));
    }
}
