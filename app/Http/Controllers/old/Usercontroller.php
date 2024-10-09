<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Http\Requests\StoreuserRequest;
use App\Http\Requests\UpdateuserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'email' => 'required|max:255|email:dns',
            'phone_number' => "required|max:14",
            'password' => 'required',
        ]);
        $validated['name'] = $validated['nama'];
        $validated['password'] = bcrypt($validated['password']);
        $validated['role'] = 1;
        user::create($validated);

        $request->session()->flash('success', 'Registrasi Akun Berhasil!! Silahkan Login');

        return redirect('login');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|max:255|email:dns',
            'password' => 'required',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            if (auth()->user()->role==0) {
                return redirect()->intended('/admin');
            }
            return redirect()->intended('/');
        }

        return back()->with('LoginError', 'Login Gagal!!');
    }


    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function update(UpdateuserRequest $request, user $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        //
    }
}
