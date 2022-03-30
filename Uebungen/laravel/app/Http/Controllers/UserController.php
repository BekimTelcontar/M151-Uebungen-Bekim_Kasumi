<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register() {
        $username = request()->get('username');
        $password = request()->get('password');

        // PASSWORT Verschlüsseln
        $password = password_hash($password, PASSWORD_DEFAULT);

        // INSERT USER
        User::create([
            'username' => $username,
            'password' => $password
        ]);
    }

    public function login() {
        $username = request()->get('username');
        $password = request()->get('password');

        $user = User::where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                session()->put('userId', $user->id);
                // Logged in
            }
            else {
                // Error, password wrong
            }
        }
        else {
            // Error, user not found
        }
    }

    public function profile() {
        if ($this->isUserLoggedIn()) {
            $user = $this->getUser();

            return view('user.profile', [
                'user' => $user
            ]);
        }
        else {
            return redirect('/login');
        }
    }

    public function logout() {
        session()->flush();
    }

    protected function isUserLoggedIn() {
        if (session()->has('userId')) {
            return true;
        }
        return false;
    }

    protected function getUser() {
        if ($this->isUserLoggedIn()) {
            return User::find(session()->get('userId'));
        }

        return null;
    }
}
