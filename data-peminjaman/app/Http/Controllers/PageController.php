<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        if (empty($username) || empty($password)) {
            return redirect('/login')->with('error', 'Username dan password harus diisi!');
        }

        $request->session()->put('username', $username);

        return redirect('/dashboard');
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username');

        return view('dashboard', ['username' => $username]);
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username');

        return view('profile', ['username' => $username]);
    }

    public function pengelolaan()
    {
        $peminjaman = [
            [
                'id' => 1,
                'judul_buku' => 'Supernova 1: Kesatria, Putri, & Bintang Jatuh',
                'penulis' => 'Dee Lestari',
                'tanggal_pinjam' => '2022-04-03',
                'tanggal_kembali' => '2022-04-08',
                'status' => 'Dipinjam'
            ],
            [
                'id' => 2,
                'judul_buku' => 'Kata',
                'penulis' => 'Nadhifa Allya Tsana',
                'tanggal_pinjam' => '2021-02-18',
                'tanggal_kembali' => '2021-02-24',
                'status' => 'Dipinjam'
            ],
            [
                'id' => 3,
                'judul_buku' => 'Janshen',
                'penulis' => 'Risa Saraswati',
                'tanggal_pinjam' => '2020-10-09',
                'tanggal_kembali' => '2020-10-17',
                'status' => 'Dikembalikan'
            ],
            [
                'id' => 4,
                'judul_buku' => 'Hans',
                'penulis' => 'Risa Saraswati',
                'tanggal_pinjam' => '2021-11-18',
                'tanggal_kembali' => '2021-11-26',
                'status' => 'Belum Dikembalikan'
            ]

        ];

        return view('pengelolaan', ['peminjaman' => $peminjaman]);
    }
}
