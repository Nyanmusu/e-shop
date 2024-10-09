<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("login", [
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreusersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $id)
    {
        return view('adminedit', [
            'dataa' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusersRequest $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
    
    public function cetak(users $users){
        $users = users::all();
        return view('admin', [
            'data' => $users
        ]);
    }

    public function delete(users $id){
        users::destroy($id->id);
        session()->flash('success', 'User Berhasil Dihapus');
        return redirect('/admin');
    }

    public function auth(Request $request)
        {
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);
    
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('/landing');
            }
    
            return back()->with('LoginError', 'Login failed!');
        }

}
