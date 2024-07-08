<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function index() {
        $user = Auth::user();

        if($user){
            if($user->id_level == '1'){
                return redirect()->intended('admin/dashboard/');
            }
            else if ($user->id_level == '2') {
                return redirect()->intended('cashier/dashboard/');
            }
            else if ($user->id_level == '3') {
                return redirect()->intended('customer/dashboard/');
            }
        }
        return view('login');
    }

    public function proses_login(Request $request) {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $credential = $request->only('username', 'password');

        if (Auth::attempt($credential)) {
            $user = Auth::user();

            if($user->id_level == '1'){
                return redirect()->intended('admin/dashboard/');
            }
            
            else if($user->id_level == '2'){
                return redirect()->intended('admin/dashboard/');
            }
            return redirect()->intended('/');
        }

        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Pastikan kembali username dan password yang dimasukan sudah benar']);
    }
}
