@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Daftar Motor</h1>
        <a href="{{ route('motors.create') }}" class="btn btn-primary mb-3">Tambah Motor</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Plat Motor</th>
                    <th>Nama Motor</th>
                    <th>Warna</th>
                    <th>Tipe</th>
                    <th>Tahun</th>
                    <th>Tanggal Pajak</th>
                    <th>Nama Pemilik</th>
                    <th>CC</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th>Gambar Motor</th>
                    <th>Tanggal Catat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($motors as $motor)
                    <tr>
                        <td>{{ $motor->plat_motor }}</td>
                        <td>{{ $motor->nama_motor }}</td>
                        <td>{{ $motor->warna }}</td>
                        <td>{{ $motor->tipe }}</td>
                        <td>{{ $motor->tahun }}</td>
                        <td>{{ $motor->tgl_pajak }}</td>
                        <td>{{ $motor->nama_pemilik }}</td>
                        <td>{{ $motor->cc }}</td>
                        <td>{{ $motor->harga_sewa }}</td>
                        <td>{{ $motor->status }}</td>
                        <td>{{ $motor->gambar_motor }}</td>
                        <td>{{ $motor->tgl_catat }}</td>
                        <td>
                            <a href="{{ route('motors.edit', $motor->plat_motor) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('motors.destroy', $motor->plat_motor) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus motor ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
