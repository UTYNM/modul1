<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    function index()
    {
        $data['list_jurusan'] = Jurusan::all();
        return view('jurusan.index' , $data);
    }

    function create()
    {
        return view('jurusan.create');
    }

    function store()
    {
        $jurusan = new Jurusan;
        $jurusan->kode_jurusan = request('kode_jurusan');
        $jurusan->nama_jurusan = request('nama_jurusan');
        $jurusan->nama_kajur = request('nama_kajur');
        $jurusan->save();
        return redirect('jurusan');
    }

    function show(Jurusan $jurusan)
    {
        $data['detail'] = $jurusan;
        return view('jurusan.show', $data);
    }

    function edit(Jurusan $jurusan)
    {
        $data['detail'] = $jurusan;
        return view('jurusan.edit', $data);
    }

    function update(Jurusan $jurusan)
    {
        $jurusan->kode_jurusan = request('kode_jurusan');
        $jurusan->nama_jurusan = request('nama_jurusan');
        $jurusan->nama_kajur = request('nama_kajur');
        $jurusan->save();
        return redirect('jurusan');
    }

    function destroy(Jurusan $jurusan)
    {
        $jurusan->delete();
        return redirect('jurusan');
    }
}
