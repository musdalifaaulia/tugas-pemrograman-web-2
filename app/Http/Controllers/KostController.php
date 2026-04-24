<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kost;

class KostController extends Controller
{
    public function index()
    {
    return view('kosts.index', [
    'title' => 'Data Kost',
    'kosts' => Kost::latest()->get()
]);
   
    }
}
