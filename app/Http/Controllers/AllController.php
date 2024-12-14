<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AllController extends Controller
{
    // PAGE
    public function index() {
        return view('index');
    }

    public function login() {
        return view('login');
    }

    public function signup() {
        return view('signup');
    }

    public function animeDetail() {
        return view('anime-detail');
    }

    public function blogDetail() {
        return view('blog-detail');
    }

    public function blog() {
        return view('blog');
    }

    public function categories() {
        return view('categories');
    }

    public function main() {
        return view('main');
    }

    public function watching() {
        return view('watching');
    }

    public function watchings() {
        // Logika untuk menampilkan halaman watchings
        return view('watchings'); // Ganti dengan nama view yang sesuai
    }

    public function watchingss() {
        return view('watchingss');
    }
    // PROCESS
    public function signupProcess(Request $request) {
        $email = $request->email;
        $name = $request->name;
        $password = Hash::make($request->password);

        User::create([
            'email' => $email,
            'name' => $name,
            'password' => $password
        ]);

        return redirect('/login');
    }
}