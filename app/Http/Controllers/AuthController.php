<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;


//this controller is used for login, register, and logout
class AuthController extends Controller
{
    /**
     * Display the index page.
     *
     * This method checks the user's level and redirects them to the appropriate dashboard page.
     * If the user is not logged in, it displays the login page.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index() {
        $user = Auth::user();
    
        if($user){
            if($user->level_id == '1'){
                return redirect()->route('admin.dashboard');
            }
            else if ($user->level_id == '2') {
                return redirect()->route('cashier.dashboard');
            }
            else if ($user->level_id == '3') {
                return redirect()->route('customer.dashboard');
            }else {
                return redirect('/');
            }
        }
        return view('login');
    }
    
    public function proses_login(Request $request) {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);
        
            $credential = $request->only('email', 'password');
            // dd($credential);
        
            if (Auth::attempt($credential)) {
                $user = Auth::user();
    
                if($user->level_id == '1'){
                    return redirect()->intended('admin/dashboard/');
                }
                
                else if($user->level_id == '2'){
                    return redirect()->intended('cashier/dashboard/');
                }
                else if($user->level_id == '3'){
                    return redirect()->intended('/');
                }
                return redirect()->intended('/');
            }
        
            return back()
            ->withInput($request->except('password'))
            ->withErrors(['email' => 'The provided credentials do not match our records.']);
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    /**
     * Display the registration form.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function register() {
        return view('register');
    }

    /**
     * Process the registration form.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function proses_register(Request $request) {
        $request->validate([
            // 'level_id' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required|confirmed',
        ]);

        $user = new UserModel();
        $user->level_id = 3;
        $user->email = $request->email;
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = bcrypt($request->password);
        $user->created_at = now();
        $user->updated_at = null;
        // dd($user);
        $user->save();

        return redirect('register')->with('success', 'Akun anda berhasil dibuat! Silahkan login');
    }
}
