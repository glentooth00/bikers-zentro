<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
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

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
        // dd($credentials);

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to dashboard or desired route
            return redirect()->intended('/admin/dashboard');
        } else {
            // Authentication failed, redirect back with error message
            return redirect()->back()->withErrors(['error' => 'Invalid username or password']);
        }
    }

    public function inventory(){
        return view('admin.inventory');
    }

    /**
     * Display the login form.
     */
    public function showLoginForm()
    {
        return view('login'); // Assuming you have a login.blade.php file in your views/auth directory
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirect to the login page or any other page
    }
}
