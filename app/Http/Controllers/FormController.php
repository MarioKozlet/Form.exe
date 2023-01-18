<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
            'lokasi' => '',
            'gratifikasi' => '',
            'image' => 'image|file',
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


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
