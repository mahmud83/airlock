@extends('layouts.app')

@section('content')
<div class="container">
    <nav>
      <div class="nav nav-tabs">
        <a class="nav-item nav-link" href="{{ route('students.index') }}">Data table</a>
        <a class="nav-item nav-link active">Show</a>
        <a class="nav-item nav-link" href="{{ route('students.upload') }}">Import excel</a>
      </div>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Show student
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="table-responsive-md">
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <td>User ID</td>
                                        <td>{{ $student->user_id }}</td>
                                    </tr>
                                    <tr>
                                        <td>NISN</td>
                                        <td>{{ $student->nisn }}</td>
                                    </tr>
                                    <tr>
                                        <td>NIS</td>
                                        <td>{{ $student->nis }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <td>{{ $student->nama_lengkap }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <td>{{ $student->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <td>{{ $student->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <td>{{ $student->agama }}</td>
                                    </tr>
                                    <tr>
                                        <td>Anak Ke</td>
                                        <td>{{ $student->anak_ke }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>{{ $student->alamat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telp</td>
                                        <td>{{ $student->telp }}</td>
                                    </tr>
                                    <tr>
                                        <td>Joined</td>
                                        <td>{{ $student->created_at->diffForHumans() }}</td>
                                    </tr>
                                    <tr>
                                        <td>Updated</td>
                                        <td>{{ $student->updated_at->diffForHumans() }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="table-responsive-md">
                                <table class="table table-striped table-sm">
                                    <tr>
                                        <td>Sekolah Asal</td>
                                        <td>{{ $student->sekolah_asal }}</td>
                                    </tr>
                                    <tr>
                                        <td>Diterima Dikelas</td>
                                        <td>{{ $student->diterima_dikelas }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Diterima</td>
                                        <td>{{ $student->tanggal_diterima }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ayah</td>
                                        <td>{{ $student->nama_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Ibu</td>
                                        <td>{{ $student->nama_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Ortu</td>
                                        <td>{{ $student->alamat_ortu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telp Rumah</td>
                                        <td>{{ $student->telp_rumah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td>{{ $student->pekerjaan_ayah }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td>{{ $student->pekerjaan_ibu }}</td>
                                    </tr>
                                    <tr>
                                        <td>Nama Wali</td>
                                        <td>{{ $student->nama_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Wali</td>
                                        <td>{{ $student->alamat_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>Telp Wali</td>
                                        <td>{{ $student->telp_wali }}</td>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan Wali</td>
                                        <td>{{ $student->pekerjaan_wali }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection