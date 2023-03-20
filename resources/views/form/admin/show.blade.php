@extends('layouts.main')
@section('container')
    <h2> Detail Data Form </h2>
    <table cellpadding=5>
        <tr>
            <td class="fw-bold"> Email </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->email }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Nama </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->nama }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> NIP </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->nip }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Jenis Gratifikasi </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->jenis }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Deskripsi Singkat </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->deskripsi }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Perkiraan Harga </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->harga }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Perisitiwa Penerimaan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->peristiwa }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Tanggal Pemberian </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->tgl }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Lokasi Pemberian </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->lokasi }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Pemberi Gratifikasi </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->gratifikasi }} </td>
        </tr>
        <tr style="vertical-align:top ">
            <td class="fw-bold"> File </td>
            <td class="fw-bold"> : </td>
            <td>
                <iframe src="{{ asset('storage/' . $form->image) }}" type="pdf">
                </iframe>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h2> Surat Pernyataan </h2>
            </td>
        </tr>
        <tr>
            <td class="fw-bold"> Nama Lengkap </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->namalengkap }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> NIP </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->nip1 }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Jabatan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->jabatan }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Pangkat/Golongan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->pangkat }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Bagian/Unit </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->bagian }} </td>
        </tr>
        <tr>
            <td colspan="3">
                <h2> Menyatakan dengan sebenarnya memiliki potensi benturan kepentingan dengan atasan langsung yaitu : </h2>
            </td>
        </tr>
        <tr>
            <td class="fw-bold"> Nama Lengkap </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->namalengkap1 }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Jabatan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->jabatan1 }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Pangkat/Golongan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->pangkat1 }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Bagian/Unit </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->bagian1 }} </td>
        </tr>
        <tr>
            <td class="fw-bold"> Bentuk Potensi Benturan Kepentingan </td>
            <td class="fw-bold"> : </td>
            <td> {{ $form->bentukpoten }} </td>
        </tr>
    </table>
    <div class="d-flex flex-row align-items-center">
        <button onclick="history.back()" class="btn btn-danger"> Kembali </button>
    </div>
@endsection
