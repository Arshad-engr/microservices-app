<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
class UsersController extends Controller
{
    
    public function store(Request $request)
    {
       Log::info('Users Service submitted', [
            'firstName' => $request->input('firstName'),
            'lastName' => $request->input('lastName'),
            'email' => $request->input('email'),
        ]);
      
         // Generate and dispatch event
         event(new \App\Events\UserRegistered($request->all()));
         return response()->json(['message' => 'User data stored successfully']);
    }
}
