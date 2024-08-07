<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Facade;

class RegisterController extends Controller
{
    public function __invoke(Request $request) {
        try {
            // Your validation and user creation logic here
    
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'username' => 'required',
                'nama' => 'required',
                'password' => 'required',
                'level_id' => 'required'
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
                'level_id' => $request->level_id,
            ]);
            
            if ($user) {
                // return redirect('register')->with('success', 'Registration successful!');
                return response()->json([
                    'success' => true,
                    'message' => 'Registration successful!',
                    'user' => $user,
                ], 201);
                // return response()->json(['message' => 'Registration successful!'], 201);
                // return response()->json(['message' => 'User registered successfully'], 201);
            } 
            return response()->json([
                'success' => false,
                'message' => 'Registration failed. Please try again.',
            ], 409);

        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred during registration'], 500);
        }
        
        // }

        // return redirect('register')->with('error', 'Registration failed. Please try again.');

    }
}
