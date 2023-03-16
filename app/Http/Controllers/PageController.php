<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Controller Page 1
    public function Page1()
    {
        return view('page.page1');
    }

    //Controller page 1 Proses
    public function Page1Proses(Request $request)
    {
        $data = [
            'data' => $request->data,
            'email' => $request->email,
            'nip' => $request->nip,
            'nip1' => $request->nip1,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'peristiwa' => $request->peristiwa,
            'tgl' => $request->tgl,
            'lokasi' => $request->lokasi,
            'gratifikasi' => $request->gratifikasi,
            'namalengkap' => $request->namalengkap,
            'namalengkap1' => $request->namalengkap1,
            'jabatan' => $request->jabatan,
            'pangkat' => $request->pangkat,
            'jabatan1' => $request->jabatan1,
            'pangkat1' => $request->pangkat1,
            'bagian' => $request->bagian,
            'bagian1' => $request->bagian1,
            'bentukpoten' => $request->bentukpoten,
        ];

        form::create($data);
        return redirect('/')->with('success', 'Data anda berhasil di input! ');

        return redirect()->route('page-2');
    }
}
