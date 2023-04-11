<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Hash;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    //register
    public function createUser(Request $request)
    {
        // return 1000;
        try {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users',
                'password' => 'required|string|min:8',
                'primary_mobile_number' => 'required|string|min:11',
                'gender' => 'required|string',
                'date_of_birth' => 'required'
            ]);
        } catch (ValidationException $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $exception->errors()
            ], 422);
        }
    
        try {
            $user = User::insert([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'primary_mobile_number' => $validatedData['primary_mobile_number'],
                'gender' => $validatedData['gender'],
                'date_of_birth' => $validatedData['date_of_birth'],
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'User creation failed'
            ], 500);
        }
    
        return response()->json([
            'status' => 'success',
            'user' => $user
        ], 201);
    }
    
    //login 
    public function loginUser(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'email' => 'required|email',
                'password' => 'required|string'
            ]);
        } catch (ValidationException $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $exception->errors()
            ], 422);
        }
    
        try {
            if (!Auth::attempt($validatedData)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid login credentials'
                ], 401);
            }
    
            $user = Auth::user();
    
            $token = encrypt($user->id);
    
            return response()->json([
                'status' => 'success',
                'token' => $token,
                'user' => $user,
                'isLoggedIn' => true
            ]);
        } catch (Exception $exception) {
            return response()->json([
                'status' => 'error',
                'message' => 'Login failed'
            ], 500);
        }
    }    

    //get user by token
    public function getUserByToken(Request $request){
        $data = $reuqest->all();
        session($data);
    }
}
