<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        User::create([
            'name' => 'Tanvir',
            'email' => 'tahmedhera@gmail.com',
            'password' => bcrypt(12345678),
        ]);

        User::create([
            'email' => 'tanvir59@outlook.com',
            'password' => bcrypt(12345678),
        ]);

        return view('index', [
            'users' => User::all(),
        ]);
    }
}
