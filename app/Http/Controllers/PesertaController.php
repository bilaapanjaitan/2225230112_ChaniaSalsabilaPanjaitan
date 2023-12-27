<?php

namespace App\Http\Controllers;

use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = Peserta::all();
        return view('peserta.index',compact(['peserta']));
    }
    public function create()
    {
        return view('peserta.create');
    }
    public function store(Request $request)
    {
        Peserta::create($request->except(['_token','submit']));
        return redirect('/peserta');
    }
    public function edit($id)
    {
        $peserta = Peserta::find($id);
        return view('peserta.edit',compact(['peserta']));
    }
    public function update($id, Request $request)
    {
        $peserta = Peserta::find($id);
        $peserta->update($request->except(['_token','submit']));
        return redirect('/peserta');
    }
    public function destroy($id)
    {
        $peserta = Peserta::find($id);
        $peserta->delete();
        return redirect('/peserta');
    }
}