@include('layouts.main')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed&display=swap');

    .container {
        font-family: 'Sofia Sans Semi Condensed', sans-serif;
    }

    .f {
        font-size: 20px;
        font-weight: bold;
    }

    .h {
        font-size: 30px;
        font-weight: bolder;
    }
</style>
<div class="container mt-2">
    <h1 align="center" class="h"> Sistem Informasi Pelaporan Grafikasi </h1>
    <div>
        <p class="f"><u><b> Menu Laporan Gratifikasi </b></u></p>
    </div>
    <form action="/page-1/proses" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset class="form-fieldset">
            <table class="table table-borderless">
                <tr>
                    <td><b> Email </b></td>
                    <td> : </td>
                    <td> <input class="form-control w-50" type="email" name="email" required> </td>
                </tr>
                <tr>
                    <td><b> Nama </b></td>
                    <td> : </td>
                    <td> <input class="form-control w-50" type="text" name="nama" value="" required> </td>
                </tr>
                <tr>
                    <td><b> NIP </b></td>
                    <td> : </td>
                    <td> <input class="form-control w-50" type="number" name="nip" value="" required> </td>
                </tr>
                <tr>
                    <td><b> Jenis Gratifikasi </b></td>
                    <td> : </td>
                    <td>
                        <div class="mb-3">
                            <div>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="uang" required>
                                    <span class="form-check-label">Uang</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="barang" required>
                                    <span class="form-check-label">Barang</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="diskon" required>
                                    <span class="form-check-label">Rabat (diskon)</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="komisi" required>
                                    <span class="form-check-label">Komisi</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="perjalanan" required>
                                    <span class="form-check-label">Tiket Perjalanan</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="pehinanpan" required>
                                    <span class="form-check-label">Fasilitas Penginapan</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="wisata" required>
                                    <span class="form-check-label">Perjalanan Wisata</span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="pengobatan" required>
                                    <span class="form-check-label">Pengobatan Cuma-cuma </span>
                                </label>
                                <label class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis" id="jenis"
                                        value="lainnya" required>
                                    <span class="form-check-label">Jasa Lainnya</span>
                                </label>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>

            <b>
                <p> Deskripsi singkat gratifikasi (bentuk, merk, tahun, pembayaran dll) </p>
            </b>
            <div class="mb-3">
                <textarea class="form-control" name="deskripsi" id="deskripsi" required></textarea>
            </div>

            <b>
                <p> Perkiraan Harga/Nomial (dalam bentuk angka) Contoh : 1000000 </p>
            </b>
            <div class="mb-3">
                <textarea class="form-control" name="harga" value="harga" required></textarea>
            </div>

            <div class="mb-3 mt-0">
                <b>
                    <p> Peristiwa Penerimaan : </p>
                </b>
                <label class="form-check">
                    <input class="form-check-input" type="radio" name="peristiwa" value="pernikahan">
                    <span class="form-check-label" required> Pernikahan/Keagamaan/Acara Adat </span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" name="peristiwa" value="mutasi">
                    <span class="form-check-label" required> Mutasi/Promosi/Pisah Sambut </span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" name="peristiwa" value="pelayanan">
                    <span class="form-check-label" required> Tugas Pelayanan </span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" name="peristiwa" value="nonpelayanan">
                    <span class="form-check-label" required> Non Pelayanan </span>
                </label>
                <label class="form-check">
                    <input class="form-check-input" type="radio" name="peristiwa" value="seminar">
                    <span class="form-check-label" required> Seminar/Diktat/Workshop </span>
                </label>
            </div>
            <div class="p-2 md-2">
                <div class="row">
                    <b>Tanggal Pemberian</b>
                </div>
                <div class="row w-25 mx-1 mt-2">
                    <input class="form-control" type="date" name="tgl" value="tgl" required>
                </div>
                <div class="row mt-2">
                    <b> Lokasi Pemberian (Ruangan,Tempat,Gedung) </b>
                </div>
                <div class="row w-25 mx-1">
                    <input class="form-control" type="text" name="lokasi" placeholder="lokasi" required>
                </div>
                <div class="row mt-2">
                    <b> Pemberi Gratifikasi </b>
                </div>
                <div class="row w-25 mx-1">
                    <input class="form-control" type="text" name="gratifikasi" id="gratifikasi" required>
                </div>
                <div class="row mt-2">
                    <b> Lampirkan Bukti </b>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <input type="file" id="image" name="image" value="image" required>
                    </div>
                </div>
        </fieldset>
        <div class="mt-4 mb-3 f">
            <u><b>Menu Surat Pernyataan</b></u>
        </div>
        <fieldset class="form-fieldset">
            <div class="container">
                <div class="justify-content-left">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Nama Lengkap</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-75" name="namalengkap" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>NIP</b>
                        </div>
                        <div class="col">
                            <input type="number" class="form-control w-75" name="nip1" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Jabatan</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-50" name="jabatan" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Pangkat/Golongan</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-50" name="pangkat" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Bagian/Unit</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-25" name="bagian" value="" required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <div class="mb-3 mt-4">
            <u class="f"> Menyatakan dengan sebenarnya memiliki potensi benturan kepentingan dengan
                atasan langsung yaitu :
            </u>
        </div>
        <fieldset class="form-fieldset">
            <div class="container">
                <div class="justify-content-left">
                    <div class="row">
                        <div class="col-md-2">
                            <b>Nama Lengkap</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-75" name="namalengkap1" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Jabatan</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-75" name="jabatan1" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Pangkat/Golongan</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-50" name="pangkat1" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Bagian/Unit</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-50" name="bagian1" value="" required>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <b>Bentuk Potensi Benturan Kepentingan</b>
                        </div>
                        <div class="col">
                            <input type="text" class="form-control w-75" name="bentukpoten" placeholder="bentukpoten"
                                required>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <button type="submit" class="btn btn-primary"> Kirim </button>
        <a type="submit" class="btn btn-danger" href="/admin"> Batal </a>
    </form>
</div>
<div class="container text-center">
    <small> 2023-2024 | Made with <i class="bi bi-heart-fill"></i> by MarioKozlet </small>
</div>
