@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Input Data Motor') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('motors.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="plat_motor" class="col-md-4 col-form-label text-md-right">{{ __('Plat Motor') }}</label>

                                <div class="col-md-6">
                                    <input id="plat_motor" type="text" class="form-control @error('plat_motor') is-invalid @enderror" name="plat_motor" value="{{ old('plat_motor') }}" required autocomplete="plat_motor" autofocus>

                                    @error('plat_motor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_motor" class="col-md-4 col-form-label text-md-right">{{ __('Nama Motor') }}</label>

                                <div class="col-md-6">
                                    <input id="nama_motor" type="text" class="form-control @error('nama_motor') is-invalid @enderror" name="nama_motor" value="{{ old('nama_motor') }}" required autocomplete="nama_motor">

                                    @error('nama_motor')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="warna" class="col-md-4 col-form-label text-md-right">{{ __('Warna') }}</label>
                                <div class="col-md-6">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Red">
                                        <label class="form-check-label" for="color_red">Merah</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Green">
                                        <label class="form-check-label" for="color_green">Hijau</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Blue">
                                        <label class="form-check-label" for="color_blue">Biru</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Hitam">
                                        <label class="form-check-label" for="color_red">Hitam</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Putih">
                                        <label class="form-check-label" for="color_green">Putih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="warna" id="warna" value="Kuning>
                                        <label class="form-check-label" for="color_blue">Kuning</label>
                                    </div>
                            
                                    @error('warna')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tipe" class="col-md-4 col-form-label text-md-right">{{ __('Tipe') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control" id="tipe" name="tipe">
                                        <option value="">Pilih tipe motor</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Yamaha">Yamaha</option>
                                        <option value="Suzuki">Suzuki</option>
                                        <option value="Kawasaki">Kawasaki</option>
                                        <option value="Moge">Moge</option>
                                        <option value="Piagio">Piagio</option>
                                    </select>
                            
                                    @error('tipe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tahun" class="col-md-4 col-form-label text-md-right">{{ __('Tahun') }}</label>

                                <div class="col-md-6">
                                    <input id="tahun" type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" value="{{ old('tahun') }}" required autocomplete="tahun">

                                    @error('tahun')
                                    <span class="help-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_pajak" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Pajak') }}</label>

                            <div class="col-md-6">
                                <input id="tgl_pajak" type="date" class="form-control @error('tgl_pajak') is-invalid @enderror" name="tgl_pajak" value="{{ old('tgl_pajak') }}" required autocomplete="tgl_pajak">

                                @error('tgl_pajak')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_pemilik" class="col-md-4 col-form-label text-md-right">{{ __('Nama Pemilik') }}</label>

                            <div class="col-md-6">
                                <input id="nama_pemilik" type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" name="nama_pemilik" value="{{ old('nama_pemilik') }}" required autocomplete="nama_pemilik">

                                @error('nama_pemilik')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cc" class="col-md-4 col-form-label text-md-right">{{ __('CC') }}</label>

                            <div class="col-md-6">
                                <input id="cc" type="text" class="form-control @error('cc') is-invalid @enderror" name="cc" value="{{ old('cc') }}" required autocomplete="cc">

                                @error('cc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga_sewa" class="col-md-4 col-form-label text-md-right">{{ __('Harga Sewa') }}</label>

                            <div class="col-md-6">
                                <input id="harga_sewa" type="text" class="form-control @error('harga_sewa') is-invalid @enderror" name="harga_sewa" value="{{ old('harga_sewa') }}" required autocomplete="harga_sewa">

                                @error('harga_sewa')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <select id="status" name="status" class="form-control @error('status') is-invalid @enderror" required>
                                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>{{ __('Available') }}</option>
                                    <option value="0" {{ old('status') == 0 ? 'selected' : '' }}>{{ __('Not Available') }}</option>
                                </select>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gambar_motor" class="col-md-4 col-form-label text-md-right">{{ __('Gambar Motor') }}</label>

                            <div class="col-md-6">
                                @if (isset($motor) && $motor->gambar_motor!='')
                                    <img src="{{asset('storage/'.$motor->gambar_motor)}}" class="mx-auto h-12 w-12 text-gray-400 rounded" alt="">
                                @endif
                                <input id="gambar_motor" type="file" class="form-control-file @error('gambar_motor') is-invalid @enderror" name="gambar_motor" required>

                                @error('gambar_motor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tgl_catat" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal Catat') }}</label>

                            <div class="col-md-6">
                                {{-- <input type="date" id="tanggal" name="tanggal" value="{{ date('Y-m-d') }}"> --}}
                                <input id="tgl_catat" type="date" class="form-control @error('tgl_catat') is-invalid @enderror" name="tgl_catat" value="{{ date('Y-m-d') }}" required autocomplete="tgl_catat">

                                @error('tgl_catat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
                                </button>
                                <a href="{{ route('motors.index') }}" class="btn btn-danger">
                                    {{ __('Batal') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection