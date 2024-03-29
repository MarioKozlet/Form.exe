<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.page1');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('page.page1');
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
            'nip' => 'required',
            'nip1' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required',
            'peristiwa' => 'required',
            'tgl' => 'required',
            'lokasi' => 'required',
            'gratifikasi' => 'required',
            'image' => 'required|file|max:1024|mimes:pdf,jpg,jpeg,png',
            'namalengkap' => 'required',
            'namalengkap1' => 'required',
            'jabatan' => 'required',
            'pangkat' => 'required',
            'jabatan1' => 'required',
            'pangkat1' => 'required',
            'bagian' => 'required',
            'bagian1' => 'required',
            'bentukpoten' => 'required'
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('file-images');
        }

        form::create($validatedData);
        return redirect('/')->with('success', 'Data anda berhasil di input! ');
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
