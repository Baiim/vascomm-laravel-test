<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('pages.admin.user.index', compact('user'));
    }

    public function create(){
        return view('pages.admin.user.create');
    }

    public function store(UserRequest $request)
    {

        $password = $request->filled('password') ? $request->password : '123456';
        $hashedPassword = Hash::make($password);

        $user = new User;
        $user->name = $request->name;
        $user->notelp = $request->notelp;
        $user->email = $request->email;
        $user->password = $hashedPassword;
        $user->status = isset($request->status) ? $request->status : 0;
        $user->is_admin = isset($request->is_admin) ? $request->is_admin : 0;

        $user->save();


        return redirect()->route('user')->with('success', 'User berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $item = User::findorFail($id);
        $item->delete();

        return redirect()->route('user');

    }
}
