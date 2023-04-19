@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah data transaksi</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('transaksi.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="kode_transaksi">Kode Transaksi</label>
                                <input type="text" class="form-control @error('kode_transaksi') is-invalid @enderror" id="kode_transaksi" name="kode_transaksi" value="{{ old('kode_transaksi') }}" required readonly>
                                @error('kode_transaksi')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_paspor">Nama Penyewa</label>
                                <select name="no_paspor" id="no_paspor" class="form-control">
                                    @foreach ($penyewas as $penyewa)
                                        <option value="{{ $penyewa->no_paspor }}">{{ $penyewa->nama_penyewa }} ({{ $penyewa->no_paspor }})</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="plat_motor">Pilih Motor</label>
                                <select name="plat_motor" id="plat_motor" class="form-control">
                                    @foreach ($motors as $motor)
                                        <option value="{{ $motor->plat_motor }}" id="harga_sewa">{{ $motor->nama_motor }} ({{ $motor->plat_motor }}) <p>{{ $motor->harga_sewa }}</p></option>
                                    @endforeach
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="id_pegawai">Operator/Pegawai</label>
                                <select name="id_pegawai" id="id_pegawai" class="form-control">
                                    @foreach ($pegawais as $pegawai)
                                        <option value="{{ $pegawai->id_pegawai }}">{{ $pegawai->nama_pegawai }} ({{ $pegawai->id_pegawai }})</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="form-group d-none">
                                <label for="harga_per_hari">Harga Per hari</label>
                                <input type="number" class="form-control" name="harga_per_hari" id="harga_per_hari" value="{{ $motor->harga_sewa }}">
                            </div> --}}
                            

                            {{-- Tanggal sewa --}}
                            <div class="form-group">
                                <label for="tgl_mulai">Tanggal mulai sewa</label>
                                <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai">
                            </div>
                            <div class="form-group">
                                <label for="tgl_selesai">Tanggal Selesai</label>
                                <input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai">
                            </div>
                            {{-- Total Harga --}}
                            <div class="form-group">
                                <label for="total">Total Harga</label>
                                <input type="number" class="form-control" id="total" name="total">
                            </div>

                            <div class="form-group">
                                <label for="km_awal">Km Awal</label>
                                <input type="number" class="form-control" id="km_awal" name="km_awal">
                            </div>
                            <div class="form-group">
                                <label for="km_akhir">Km Awal</label>
                                <input type="number" class="form-control" id="km_akhir" name="km_akhir">
                            </div>
                            <div class="form-group">
                                <label for="catatan">Catatan</label>
                                <input type="text" class="form-control" id="catatan" name="catatan">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // kode transaksi otomatis
        window.onload = function(){
            let today = new Date();
            let year = today.getFullYear().toString();
            let month = (today.getMonth() + 1).toString().padStart(2, '0');
            let day = today.getDate().toString().padStart(2, '0');
            let createKe = localStorage.getItem('create_ke') || 1;
            localStorage.setItem('create_ke', ++createKe);
            let kodeTransaksi = 'RTL' + month + day + createKe.toString().padStart(3, '0');
            document.getElementById('kode_transaksi').value = kodeTransaksi;
        }

        // fungsi menghitung total harga
        function hitungTotalHarga() {
            // ambil tgl mulai dan selesai
            let tglMulai = new Date(document.getElementById('tgl_mulai').value);
            let tglSelesai = new Date(document.getElementById('tgl_selesai').value);

            // hitung selisih hari antara tanggal mulai dan selesai
            let selisihHari = (tglSelesai - tglMulai) / (1000 * 60 * 60 * 24);

            // ambil harga perhari
            let hargaPerHari = document.getElementById('harga_sewa').value;

            // hitung total harga
            let totalHarga = selisihHari * hargaPerHari;

            // set nilai total harga
            document.getElementById('total').value = totalHarga;
        }

        // panggil fungsi
        document.getElementById('tgl_mulai').addEventListener('change', hitungTotalHarga);
        document.getElementById('tgl_selesai').addEventListener('change', hitungTotalHarga);
    </script>
@endsection