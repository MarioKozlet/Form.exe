@include('layouts.main')
{{-- @section('container') --}}
{{-- <link rel="stylesheet" href="{{ mix('/css/style.css') }}"> --}}
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
        <form action="/form" method="POST" enctype="multipart/form-data">
          @csrf
        <fieldset class="form-fieldset">
            <table class="table table-borderless">
                <tr>
                    <td><b> Email </b></td>
                    <td> : </td>
                    <td> <input type="email" name="email"> </td>
                </tr>
                <tr>
                    <td><b> Nama </b></td>
                    <td> : </td>
                    <td> <input type="text" name="nama"> </td>
                </tr>
                <tr>
                    <td><b> NIP </b></td>
                    <td> : </td>
                    <td> <input type="number" name="nip"> </td>
                </tr>
                <tr>
                    <td><b> Jenis Gratifikasi </b></td>
                    <td> : </td>
                    <td>
                      <div class="mb-3">
                        <div>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="uang" value="uang">
                            <span class="form-check-label">Uang</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="barang" value="barang">
                            <span class="form-check-label">Barang</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="rabat" value="rabat">
                            <span class="form-check-label">Rabat (diskon)</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="komisi" value="komisi">
                            <span class="form-check-label">Komisi</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="tiketperjalanan" value="tiketperjalanan">
                            <span class="form-check-label">Tiket Perjalanan</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="faspenginapan" value="faspenginapan">
                            <span class="form-check-label">Fasilitas Penginapan</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="perjalananwis" value="perjalananwis">
                            <span class="form-check-label">Perjalanan Wisata</span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="pengobatancuma" value="pengobatancuma">
                            <span class="form-check-label">Pengobatan Cuma-cuma </span>
                          </label>
                          <label class="form-check">
                            <input class="form-check-input" type="radio"
                                 name="jasalain" value="jasalain">
                            <span class="form-check-label">Jasa Lainnya</span>
                          </label>
                        </div>
                      </div>
                    </td>
                </tr>
            </table>

              <b><p> Deskripsi singkat gratifikasi (bentuk, merk, tahun, pembayaran dll) </p></b>
              <div class="mb-3">
                <textarea class="form-control" name="desksingkat"></textarea>
              </div>

              <b><p> Perkiraan Harga/Nomial (dalam bentuk angka) Contoh : 1000000 </p></b>
              <div class="mb-3">
                <textarea class="form-control" name="perkirharga"></textarea>
              </div>

              <div class="mb-3 mt-0">
                <b><p> Peristiwa Penerimaan : </p></b>
                <label class="form-check">
                  <input class="form-check-input" type="radio"
                     name="pernikahan" value="pernikahan">
                  <span class="form-check-label"> Pernikahan/Keagamaan/Acara Adat </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio"
                     name="mutasi" value="mutasi">
                  <span class="form-check-label"> Mutasi/Promosi/Pisah Sambut </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio"
                     name="pelayanan" value="pelayanan">
                  <span class="form-check-label"> Tugas Pelayanan </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio"
                     name="nonpelayanan" value="nonpelayanan">
                  <span class="form-check-label"> Non Pelayanan </span>
                </label>
                <label class="form-check">
                  <input class="form-check-input" type="radio"
                     name="seminar" value="seminar">
                  <span class="form-check-label"> Seminar/Diktat/Workshop </span>
                </label>
              </div>
              <div class="p-2 md-2">
                <div class="row">
                    <b>Tanggal Pemberian</b>
                </div>
                <div class="row w-25 mx-1 mt-2">
                  <input type="date" name="tglpemberi">
                </div>
                <div class="row mt-2">
                  <b> Lokasi Pemberian (Ruangan,Tempat,Gedung) </b>
                </div>
                <div class="row w-25 mx-1">
                  <input type="text" name="lokasipemberi">
                </div>
                <div class="row mt-2">
                <b> Pemberi Gratifikasi </b>
                </div>
                <div class="row w-25 mx-1">
                <input type="text" name="pemberigratif">
                </div>
                <div class="row mt-2">
                  <b> Lampirkan Bukti </b>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    {{-- <input type="text" readonly> --}}
                    <label for="files" class="btn btn-primary w-25">Upload</label>
                    <input type="file" id="files" name="file"/>
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
                        <input type="text" class="w-75" name="namalengkap">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>NIP</b>
                      </div>
                      <div class="col">
                        <input type="number" class="w-75" name="nip1">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Jabatan</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-50" name="jabatan">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Pangkat/Golongan</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-50" name="pangkat">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Bagian/Unit</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-25" name="bagian">
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
                        <input type="text" class="w-75" name="namalengkap1">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Jabatan</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-75" name="jabatan1">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Pangkat/Golongan</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-50" name="pangkat1">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Bagian/Unit</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-50" name="bagian1">
                      </div>
                    </div>
                    <div class="row mt-2">
                      <div class="col-md-2">
                          <b>Bentuk Potensi Benturan Kepentingan</b>
                      </div>
                      <div class="col">
                        <input type="text" class="w-75" name="bentukpoten">
                      </div>
                    </div>
                  </div>
                </div>
        </fieldset>
        <button type="submit" class="btn btn-primary"> Kirim </button>
        <a type="submit" class="btn btn-danger" href="/home"> Batal </a>
        </form>
    </div>
    <div class="container text-center">
      <small> 2023-2024 | Made with <i class="bi bi-heart-fill"></i> by MarioKozlet </small>
    </div>
{{-- @endsection --}}
