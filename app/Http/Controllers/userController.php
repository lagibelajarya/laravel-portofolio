<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    use AuthenticatesUsers;

    // public function sample()
    // {
    //     User::create([
    //         'name' => 'rifaldi',
    //         'email' => 'rifald84@gmail.com',
    //         'password' => bcrypt('12345'),
    //     ]);
    //     echo "<script type='text/javascript'>alert('user berhasil ditambahkan');</script>";
    //     return view('login');
    // }

    public function index()
    {
        return view('login');
    }
    public function doLogin(loginRequest $request)
    {
        $credential = $request->only('email', 'password');
        if (auth()->attempt($credential)) {
            $request->session()->flash('success', 'Anda Berhasil login');
            return redirect('/home');
        } else {
            $request->session()->flash('error', 'Email dan Password salah atau belum ada');
            return redirect('/');
        }
    }
    public function doLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash('logout', 'Anda Berhasil Logout');
        return redirect('/');
    }
}
