<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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

    public function update($id)
    {
        $bahan = Bahan::find(id: $id);
        return view('bahan.edit', compact('bahan'));
    }
    public function prosesupdate($id,Request $request)
    {
        $bahan = Bahan::find($id);
        $bahan-> update($request->except('_token', 'submit'));
        return redirect('/datapembeli');
    }
    public function deleteData($id,Request $request)
    {
        $bahan = Bahan::find($id);
        $bahan-> delete();
        $request->session()->flash('msg', "Data berhasil dihapus");
        return redirect('/datapembeli');
    }
}
