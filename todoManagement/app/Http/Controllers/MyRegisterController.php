<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
class MyRegisterController extends Controller
{
    protected function create(Request $request)
    {
        \Log::info($request);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
        ]);
    }
}
