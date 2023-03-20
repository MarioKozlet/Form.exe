<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $form = form::query()
            ->get();

        return view('form.admin.admin', [
            'form' => $form
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $form = form::findOrFail($id);
        return view('form.admin.show', [
            'form' => $form
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = form::findOrFail($id);
        return view('form.admin.edit', [
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $update = [
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
            'bentukpoten' => $request->bentukpoten
        ];

        if ($request->file('image')) {
            $update['image'] = $request->file('image')->store('file-images');
        }

        form::where('id', $id)
            ->update($update);
        return redirect('/admin')->with('Data Telah Sukses Di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        form::where('id', $id)
            ->delete();
        return redirect('/admin')->with('Data Telah Berhasil Dihapus');
    }
}
