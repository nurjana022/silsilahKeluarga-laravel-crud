<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\Models\Keluarga;

class KeluargaController extends Controller
{

    public function index()
    {
        $data_keluarga = \App\Models\Keluarga::all();
        return view('keluarga.index',['data_keluarga' => $data_keluarga]);
    }

    public function create(Request $request)
    {
       return view('keluarga.create');
    }
    
    public function home(Request $request)
    {
        return view('index2');
    }

    public function store(Request $request) 
    {
        $data_keluarga = new Keluarga;
        $data_keluarga->nama_keluarga = $request->nama_keluarga;
        $data_keluarga->tanggal_lahir = $request->tanggal_lahir;
        $data_keluarga->jenis_kelamin = $request->jenis_kelamin;
        $data_keluarga->pekerjaan = $request->pekerjaan;

        $request->validate([
            'nama_keluarga' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
        ]);

        $data_keluarga->save();
        return redirect('/keluarga_terdaftar')->with('status', 'Data sudah berhasil didaftarkan!'); 
    }

    
    public function destroy(Keluarga $data_keluarga)
    {
        Keluarga::destroy($data_keluarga->id);
        return redirect('/keluarga_terdaftar')->with('status', 'Data sudah berhasil dihapus!');
    }

    public function edit(Keluarga $data_keluarga)
    {
        return view('keluarga.edit', compact('keluarga'));
    }
    
   // \App\Models\keluarga::create($request->all());
   // return redirect('/home')->with('status', 'Data sudah berhasil didaftarkan!');
}