<?php

namespace App\Controllers;

class lab extends BaseController
{
    public function index(): string
    {
        return view('Jadwal-Peminjaman/lab');
    }
}