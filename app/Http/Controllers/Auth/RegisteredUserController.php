<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'], // Corrected lowercase rule
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Create the user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Trigger the Registered event
        event(new Registered($user));

        // Automatically log the user in
        Auth::login($user);

        // Generate a token for the user (if API authentication is needed)
        $token = $user->createToken($request->email);

        // Check if the request expects a JSON response
        if ($request->expectsJson()) {
            return response()->json([
                'status' => true,
                'message' => 'User registered successfully',
                'token' => $token->plainTextToken,
                'user' => $user,
            ], 201); // 201 Created status code
        }

        // Redirect to the dashboard for web requests
        return redirect()->route('dashboard')->with([
            'status' => true,
            'message' => 'User registered successfully',
        ]);
    }
}
