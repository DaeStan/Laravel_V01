<?php

namespace App\Http\Controllers;

use App\Mail\UserConfirmation;
use App\Mail\UserFollowUp;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name'  => ['required'],
            'email'      => ['required', 'email'],
            'password'   => ['required', Password::min(6), 'confirmed']
        ]);

        $user = User::create($attributes);

        Auth::login($user);

        Mail::to($user)->queue(
            new UserConfirmation($user)
            );

        Mail::to($user)->later(now()->addMinutes(10),
            new UserFollowUp($user)
        );

        return redirect('/jobs');
    }
}
 