<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RuanganModel;

class RuanganController extends Controller
{
    public function index()
    {
        $data = RuanganModel::simplePaginate(2);
        return view('ruangan.index', compact('data'));
    }
    public function formTambah()
    {
        return view('ruangan.formtambah');
    }
    public function store(Request $request)
    {
        RuanganModel::insert([
            'nama_ruangan' => $request->input('nama_ruangan')
        ]);
        return redirect('/ruangan');
        return view('ruangan.formtambah');
    }
}
