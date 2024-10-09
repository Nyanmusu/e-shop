<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\users;

class RegisterController extends Controller{
    public function index()
    {
        return view("register", [
        ]);
    }

    public function store(Request $request)
    {
        $validateuser = $request->validate([
           'username' => 'required|max:255|unique:users',
           'password' => 'required|min:5|max:255', 
           'p_number' => 'required|max:20',
           'email' => 'required|email|max:255|unique:users',
           'birthday' => 'required',
           'address' => 'required',    
        ]);

        $validateuser['password'] = bcrypt($validateuser['password']);

        users::create($validateuser);

        session()->flash('success', 'Akun Berhasil Dibuat! Silahkan Login!');

        return redirect('/login');
    }
}