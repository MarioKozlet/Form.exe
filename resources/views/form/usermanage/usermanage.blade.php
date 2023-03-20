@extends('layouts.main')
@section('container')
<h3> List User </h3>
<div class="d-flex flex-row justify-content-end">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCreate"> <i class="ti ti-plus"></i> </button>
</div>
<table class="table table-striped table-nowrap">
    <tr>
        <th class="w-1"> No </th>
        <th class="w-9"> Nama User </th>
        <th class="w-50"> Email </th>
        <th class="w-9"> Role </th>
        <th> Action </th>
    </tr>
    @foreach ($users as $u)    
    <tr>
        <td> {{ $loop->iteration }} </td> 
        <td> {{ $u->username }} </td> 
        <td> {{ $u->email }} </td> 
        <td style="text-transform: capitalize"> {{ $u->role }} </td>
        <td>
            <button class="btn btn-warning"> <i class="ti ti-edit fs-3"></i> </button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete{{ $u->id }}"> <i class="ti ti-trash fs-3"></i> </button>
        </td> 
    </tr>

    <div class="modal fade" id="modalDelete{{ $u->id }}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId"> Peringatan </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status bg-danger"></div>
                </div>
                <div class="modal-body">
                    Apakah Anda Yakin Ingin Menghapus Data Ini? <b> Data Akan Hilang Secara Permanen </b>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Batal </button>
                    <button type="button" class="btn btn-danger"> Hapus Data </button>
                </div>
            </div>
        </div>
    </div>

    @endforeach
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="modal fade" id="modalCreate" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId"> Tambah User </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-status"></div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <label class="fw-bold"> Email </label>
                            <input type="email" name="email" class="form-control" @error('email') is-invalid @enderror>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="fw-bold"> Username </label>
                            <input type="text" name="username" class="form-control" @error('username') is-invalid @enderror>
                            <label class="text-muted"> Username dibuat untuk nama yang akan ditampilkan di website </label>
                        </div>
                        <div class="col">
                            <label class="fw-bold"> Name </label>
                            <input type="text" class="form-control" name="name" @error('name') is-invalid @enderror>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="fw-bold"> Password </label>
                            <input type="password" class="form-control" name="password" @error('password') is-invalid @enderror>
                            <label class="text-muted"> Password Minimal 8 Karakter </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Batal </button>
                    <button type="submit" class="btn btn-danger"> Tambah </button>
                </div>
            </div>
        </div>
        </div>
    </form>
</table>
@endsection