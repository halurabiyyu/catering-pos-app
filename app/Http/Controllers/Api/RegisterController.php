<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function __invoke(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            # code...
            return response()->json([
                'success' => false,
                'error' => $validator->errors()
            ], 422);
        }

        $user = UserModel::create([
            'email' => $request->email,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => 3,
        ]);

        if ($user) {
            return response()->json([
                'success' => true,
                'message' => 'Registration successful!',
                'user' => $user,
            ], 201);
            // return redirect('register')->with('success', 'Registration successful!');
        }

        // return redirect('register')->with('error', 'Registration failed. Please try again.');

        return response()->json([
            'success' => false,
            'message' => 'Registration failed. Please try again.',
        ], 409);
    }
}
