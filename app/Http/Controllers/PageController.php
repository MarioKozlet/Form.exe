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
    public function Page1Proses(Request $request){
        $data = [
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

        session()->put('session-page', $data);

        return redirect()->route('page-2');
    }

//controller page 2
    public function Page2(){
        return view('page.page2', [
            'data' => session()->get('session-page')
        ]);
    }


    public function Page2Proses(Request $request){
        $data = session()->get('session-page');

        $validatedData = $request->validate([
            'email' => 'email:dns',
            'nip' => '',
            'nip1' => '',
            'nama' => '',
            'jenis' => '',
            'deskripsi' => '',
            'harga' => '',
            'peristiwa' => '',
            'tgl' => '',
            'image' => '',
            'lokasi' => '',
            'gratifikasi' => '',
            'namalengkap' => '',
            'namalengkap1' => '',
            'jabatan' => '',
            'pangkat' => '',
            'jabatan1' => '',
            'pangkat1' => '',
            'bagian' => '',
            'bagian1' => '',
            'bentukpoten' => ''
        ]);

        // $validatedData['user_id'] = auth()->user()->id;

        if($request->file('image'))
        {
            $validatedData['image'] = $request->file('image')->store('file-images');
        }

        form::create($validatedData);
        return redirect('/')->with('success','Data anda berhasil di input! ');

        // return redirect()->route('/');
    }
}


