<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
    $siswa = Siswa::all();
    
    return view('siswa.index',compact('siswa'));
    }
    public function create()
    {
        return view('siswa.create');
    }
}