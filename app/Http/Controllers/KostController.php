<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kost;

class KostController extends Controller
{
    public function index()
    {
    return view('kost.index', [
    'title' => 'Data Kost',
    'kosts' => Kost::latest()->get()
        ]);
    }

    public function create()
    {
    return view('kost.create', [
        'title' => 'Tambah Data'
    ]);
    }

    public function store(Request $request)
    {
        
    }
}
