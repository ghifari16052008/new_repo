<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;

class BahanController extends Controller
{
    //
    public function index()
    {
        $bahan = Bahan::all();
        return view('bahan.index', data: compact(['bahan']));  
    }
    public function create()
    {
        return view('create');  
    }

    public function store(Request $request)
    {
       Bahan::create($request->except(['_token','submit']));
    }
}
