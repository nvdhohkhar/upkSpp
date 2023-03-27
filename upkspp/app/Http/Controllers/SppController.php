<?php

namespace App\Http\Controllers;

use App\Models\SPP;
use Illuminate\Http\Request;

class SppController extends Controller
{
    public function index()
    {
      $spp = SPP::all();

        return view('spp.index', compact('spp'));
    }

    public function tambah()
    {
        return view('spp.tambah');
    }

    public function simpan(Request $request)
    {
        try {
            SPP::create([
                'tahun' => $request->tahun,
                'nominal' => $request->nominal
            ]);
            
            return redirect('spp')->with('sukses', 'Data berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect('spp')->with('gagal', 'Data gagal ditambahkan.');
        }

    }

    public function edit($id)
    {
        try {
            $spp = SPP::findOrFail($id);
            
            return view('spp.edit', compact('spp'));
        } catch (\Exception $e) {
            return redirect('SPP')->with('gagal', 'Data tidak ditemukan.');
        }
    }
    
    public function update(Request $request)
    {
        try {
         SPP::where('id', $request->id)->update([
            'tahun' => $request->tahun,
            'nominal' => $request->nominal
            ]);
       
           return redirect('spp')->with('sukses', 'Data berhasil diupdate.');
        }catch (\Exception $e) {
            return redirect('spp')->with('gagal', 'Data gagal diupdate.');
        }
    }

    public function hapus($id)
     {
         try{
           SPP::findOrFail($id);
           SPP::destroy($id);
           
            return redirect('spp')->with('sukses', 'Data berhasil dihapus.');
         }catch (\Exception $e){
            return redirect('spp')->with('gagal', 'Data gagal dihapus.');
         }
     }
}



?>