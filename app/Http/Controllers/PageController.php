<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }

    public function handleLogin(Request $request) {
        $username = $request->input('username');
        return redirect()->to("/dashboard?username=" . $username);
    }

    public function dashboard(Request $request)
{
    $username = $request->query('username', 'guest');
    return view('dashboard', compact('username'));
}


    public function profile(Request $request) {
        $username = $request->query('username', 'Guest');
        return view('profile', compact('username'));
    }

    public function pengelolaan() {
        $data = [
            ['id' => 1, 'nama' => 'Gunting', 'stok' => 10],
            ['id' => 2, 'nama' => 'Pensil', 'stok' => 5],
            ['id' => 3, 'nama' => 'Lem', 'stok' => 20],
        ];
        return view('pengelolaan', compact('data'));
    }
}

