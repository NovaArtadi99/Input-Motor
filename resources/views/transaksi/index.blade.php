@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Transaksi</h4>
                        <a href="{{ route('transaksi.create') }}" class="btn btn-primary float-right">Tambah Transaksi</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Kode Transaksi</th>
                                    <th>Plat Motor</th>
                                    <th>No Paspor</th>
                                    <th>Pegawai</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Selesai</th>
                                    <th>Total</th>
                                    <th>KM Awal</th>
                                    <th>KM Akhir</th>
                                    <th>Catatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksis as $transaksi)
                                <tr>
                                    <td>{{ $transaksi->kode_transaksi }}</td>
                                    <td>{{ $transaksi->plat_motor }}</td>
                                    <td>{{ $transaksi->no_paspor }}</td>
                                    <td>{{ $transaksi->pegawai->nama_pegawai }}</td>
                                    <td>{{ $transaksi->tgl_mulai }}</td>
                                    <td>{{ $transaksi->tgl_selesai }}</td>
                                    <td>{{ $transaksi->total }}</td>
                                    <td>{{ $transaksi->km_awal }}</td>
                                    <td>{{ $transaksi->km_akhir }}</td>
                                    <td>{{ $transaksi->catatan }}</td>
                                    <td>
                                        <form action="{{ route('transaksi.destroy', $transaksi->kode_transaksi) }}" method="POST">
                                            <a href="{{ route('transaksi.edit', $transaksi->kode_transaksi) }}" class="btn btn-warning btn-sm">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection