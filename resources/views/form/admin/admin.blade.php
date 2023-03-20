@extends('layouts.main')
@section('container')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed&display=swap');

        .container {
            font-family: 'Sofia Sans Semi Condensed', sans-serif;
        }

        th {
            text-align: center
        }
    </style>
    <title>Admin Menu</title>
    <h3> Admin Menu </h3>
    <div class="table-responsive-md">
        <table class="table table-striped table-nowrap">
            <tr>
                <th class="w-1"> No </th>
                <th class="w-25"> NIP </th>
                <th class="w-50"> Nama </th>
                <th> Action </th>
            </tr>

            @foreach ($form as $item)
                <tr align="center">
                    <td> {{ $loop->iteration }}</td>
                    <td> {{ $item->nip }} </td>
                    <td> {{ $item->nama }} </td>
                    <td>
                        <a href="{{ route('admin.show', ['admin' => $item->id]) }}" class="btn btn-indigo">
                            <i class="ti ti-eye"></i>
                        </a>
                        <a href="{{ route('admin.edit', ['admin' => $item->id]) }}" class="btn btn-warning">
                            <i class="ti ti-edit"></i>
                        </a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#modalDelete-{{ $item->id }}">
                            <i class="ti ti-trash"></i>
                        </button>
                    </td>
                </tr>
                <form action="{{ route('admin.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <div class="modal fade" id="modalDelete-{{ $item->id }}" tabindex="-1" data-bs-backdrop="static"
                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalTitleId"> Peringatan </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="modal-status bg-danger"></div>
                                </div>
                                <div class="modal-body">
                                    Apakah Anda Yakin Ingin Menghapus Data Ini? <b> Data Akan Hilang Secara Permanen </b>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Batal
                                    </button>
                                    <button type="submit" class="btn btn-danger"> Hapus Data </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endforeach
        </table>
    </div>
@endsection
