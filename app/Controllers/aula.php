<?php

namespace App\Controllers;

class aula extends BaseController
{
    public function index(): string
    {
        return view('Jadwal-Peminjaman/aula');
    }
}