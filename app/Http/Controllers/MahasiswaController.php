<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //
    public function index(){
        $mahasiswas = MahasiswaModel::latest()->paginate(5);

        return view('mahasiswas.index',compact('mahasiswas'));
    }
    public function create(){
        return view('mahasiswas.create');
    }
    public function store(Request $request){
         $this->validate($request, [
            'nim'     => 'required',
            'nama'     => 'required',
            'alamat'     => 'required',
            'nomorhp'     => 'required',
            'motivasi'   => 'required|min:5'
        ]);
        MahasiswaModel::create([
            'nim'     => $request->nim,
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'nomorhp' =>$request->nomorhp,
            'motivasi' =>$request->motivasi
        ]);
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function show($id){
        $mahasiswa = MahasiswaModel::find($id);
        return view('mahasiswas.show',compact('mahasiswa'));
    }
    public function edit(MahasiswaModel $mahasiswa){
        return view('mahasiswas.edit',compact('mahasiswa'));
        
    }
    public function update(Request $request ,MahasiswaModel $mahasiswa){
        $this->validate($request, [
            'nim'     => 'required',
            'nama'     => 'required',
            'alamat'     => 'required',
            'nomorhp'     => 'required',
            'motivasi'   => 'required|min:5'
        ]);
        $mahasiswa->update([
            'nim'     => $request->nim,
            'nama'   => $request->nama,
            'alamat' => $request->alamat,
            'nomorhp' =>$request->nomorhp,
            'motivasi' =>$request->motivasi
        ]);
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    public function destroy(MahasiswaModel $mahasiswa)
    {
        
        //delete post
        $mahasiswa->delete();

        //redirect to index
        return redirect()->route('mahasiswas.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
