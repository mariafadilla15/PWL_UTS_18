<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $pegawais = Pegawai::where('nama', 'LIKE', '%' . request('search') . '%') ->paginate(5);
            return view('pegawais.index', ['pegawais' => $pegawais]);
        }else{
        //fungsi eloquent menampilkan data menggunakan pagination
        $pegawais= Pegawai::all();//ambil all data
        $pegawais= Pegawai::orderBy('nip', 'desc')->paginate(5);
        return view('pegawais.index', compact('pegawais'))
        ->with('i', (request()->input('page', 1)-1)*5);
        }
        
    }

    public function create()
    {
        //
        return view('pegawais.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip'=> 'required',
            'nama'=> 'required', 
            'alamat'=> 'required',
            'jabatan'=> 'required',
            'gaji_pokok'=> 'required', 
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawais.index')
        ->with('success', 'Pegawai Berhasil Ditambahkan');
    }

    public function show($nip)
    {
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.detail', compact('Pegawai'));
    }

    public function edit($nip)
    {
        $Pegawai = Pegawai::find($nip);
        return view('pegawais.edit', compact('Pegawai'));
    }

    public function update(Request $request, $nip)
    {
        $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'gaji_pokok' => 'required',
            ]);
            //fungsi eloquent untuk mengupdate data inputan kita
            Pegawai::find($nip)->update($request->all());
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('pegawais.index')
            ->with('success', 'Pegawai Berhasil Diupdate');
    }

    public function destroy($nip)
    {
        Pegawai::find($nip)->delete();
        return redirect()->route('pegawais.index')
        -> with('success', 'Pegawai Berhasil Dihapus');
    }
}
