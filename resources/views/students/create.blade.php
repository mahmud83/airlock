@extends('layouts.app')

@section('content')
<div class="container">
    @include('layouts.flash')
    <nav>
        <div class="nav nav-tabs">
            <a class="nav-item nav-link" href="{{ route('students.index') }}">Data table</a>
            <a class="nav-item nav-link active">Buat</a>
            <a class="nav-item nav-link" href="{{ route('students.upload') }}">Import excel</a>
        </div>
    </nav>
    <div class="card">
        <div class="card-header">
            Buat siswa baru
        </div>
        <div class="card-body">
            <form action="{{ route('students.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>USER ID</label>
                            <input type="text" class="form-control form-control-sm @error('user_id') is-invalid @enderror" placeholder="User ID" name="user_id" value="{{ old('user_id') }}" required="">
                            @error('user_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NISN</label>
                            <input type="text" class="form-control form-control-sm @error('nisn') is-invalid @enderror" placeholder="NISN" name="nisn" value="{{ old('nisn') }}" required="">
                            @error('nisn')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control form-control-sm @error('nis') is-invalid @enderror" placeholder="NIS" name="nis" value="{{ old('nis') }}" required="">
                            @error('nis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm @error('nama_lengkap') is-invalid @enderror" placeholder="Nama lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required="">
                            @error('nama_lengkap')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Kota Lahir</label>
                            <input type="text" class="form-control form-control-sm @error('tempat_lahir') is-invalid @enderror" placeholder="Kota Lahir" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required="">
                            @error('tempat_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tanggal lahir</label>
                            <input type="date" class="form-control form-control-sm @error('tanggal_lahir') is-invalid @enderror" placeholder="Tanggal Lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required="">
                            @error('tanggal_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select class="form-control form-control-sm @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                <option value="L" {{ old('jenis_kelamin') == 'L' ? 'selected' : '' }}>Laki-Laki</option>
                                <option value="P" {{ old('jenis_kelamin') == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Agama</label>
                            <input type="text" class="form-control form-control-sm @error('agama') is-invalid @enderror" placeholder="Agama" name="agama" value="{{ old('agama') }}" required="">
                            @error('agama')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Anak ke</label>
                            <input type="text" class="form-control form-control-sm @error('anak_ke') is-invalid @enderror" placeholder="Anak ke" name="anak_ke" value="{{ old('anak_ke') }}" required="">
                            @error('anak_ke')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control form-control-sm @error('alamat') is-invalid @enderror" placeholder="Alamat" name="alamat" value="{{ old('alamat') }}" required="">
                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telp</label>
                            <input type="text" class="form-control form-control-sm @error('telp') is-invalid @enderror" placeholder="Telp" name="telp" value="{{ old('telp') }}" required="">
                            @error('telp')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Sekolah asal</label>
                            <input type="text" class="form-control form-control-sm @error('sekolah_asal') is-invalid @enderror" placeholder="Sekolah asal" name="sekolah_asal" value="{{ old('sekolah_asal') }}" required="">
                            @error('sekolah_asal')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Diterima Dikelas</label>
                            <input type="text" class="form-control form-control-sm @error('diterima_dikelas') is-invalid @enderror" placeholder="Diterima dikelas" name="diterima_dikelas" value="{{ old('diterima_dikelas') }}" required="">
                            @error('diterima_dikelas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Diterima</label>
                            <input type="text" class="form-control form-control-sm @error('tanggal_diterima') is-invalid @enderror" placeholder="Tanggal diterima" name="tanggal_diterima" value="{{ old('tanggal_diterima') }}" required="">
                            @error('tanggal_diterima')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" class="form-control form-control-sm @error('nama_ayah') is-invalid @enderror" placeholder="Nama Ayah" name="nama_ayah" value="{{ old('nama_ayah') }}" required="">
                            @error('nama_ayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" class="form-control form-control-sm @error('nama_ibu') is-invalid @enderror" placeholder="Nama Ibu" name="nama_ibu" value="{{ old('nama_ibu') }}" required="">
                            @error('nama_ibu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat orang tua</label>
                            <input type="text" class="form-control form-control-sm @error('alamat_ortu') is-invalid @enderror" placeholder="Alamat orang tua" name="alamat_ortu" value="{{ old('alamat_ortu') }}" required="">
                            @error('alamat_ortu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telp rumah</label>
                            <input type="text" class="form-control form-control-sm @error('telp_rumah') is-invalid @enderror" placeholder="Telp rumah" name="telp_rumah" value="{{ old('telp_rumah') }}" required="">
                            @error('telp_rumah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ayah</label>
                            <input type="text" class="form-control form-control-sm @error('pekerjaan_ayah') is-invalid @enderror" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah" value="{{ old('pekerjaan_ayah') }}" required="">
                            @error('pekerjaan_ayah')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Ibu</label>
                            <input type="text" class="form-control form-control-sm @error('pekerjaan_ibu') is-invalid @enderror" placeholder="Pekerjaan Ibu" name="pekerjaan_ibu" value="{{ old('pekerjaan_ibu') }}" required="">
                            @error('pekerjaan_ibu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Nama Wali</label>
                            <input type="text" class="form-control form-control-sm @error('nama_wali') is-invalid @enderror" placeholder="Nama Wali" name="nama_wali" value="{{ old('nama_wali') }}" required="">
                            @error('nama_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Alamat Wali</label>
                            <input type="text" class="form-control form-control-sm @error('alamat_wali') is-invalid @enderror" placeholder="Alamat wali" name="alamat_wali" value="{{ old('alamat_wali') }}" required="">
                            @error('alamat_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telp wali</label>
                            <input type="text" class="form-control form-control-sm @error('telp_wali') is-invalid @enderror" placeholder="Telp wali" name="telp_wali" value="{{ old('telp_wali') }}" required="">
                            @error('telp_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pekerjaan Wali</label>
                            <input type="text" class="form-control form-control-sm @error('pekerjaan_wali') is-invalid @enderror" placeholder="Pekerjaan Wali" name="pekerjaan_wali" value="{{ old('pekerjaan_wali') }}" required="">
                            @error('pekerjaan_wali')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection