@extends('template')
@section('title','Halamana Mahasiswa')
@section('sub-title','Data Mahasiswa')

@section('content')
<div class="box-footer">
    <button type="reset" class="btn btn-danger btn-sm" onclick="self.history.back()"><i class="fa fa-arrow-circle-left"></i>Kembali</button>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="nav-tabs-custom">
          <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <td>{{$mahasiswa->nama_mahasiswa}}</td>
                    </tr>
                    <tr>
                        <th>Tempat Tanggal Lahir</th>
                        <td>{{$mahasiswa->tempat_lahir}}/{{$mahasiswa->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{$mahasiswa->jenis_kelamin}}</td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon</th>
                        <td>{{$mahasiswa->phone}}</td>
                    </tr>
                    <tr>
                        <th>Universitas</th>
                        <td>{{$mahasiswa->universitas['nama_universitas']}}</td>
                    </tr>
                    <tr>
                        <th>Korwil</th>
                        <td>{{$mahasiswa->korwil['nama_korwil']}}</td>
                    </tr>
                    <tr>
                        <th>Tahun Masuk</th>
                        <td>{{$mahasiswa->tahun_masuk}}</td>
                    </tr>
                    <tr>
                        <th>Nama Ayah</th>
                        <td>{{$mahasiswa->nama_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan Ayah</th>
                        <td>{{$mahasiswa->pekerjaan_ayah}}</td>
                    </tr>
                    <tr>
                        <th>Nama Ibu</th>
                        <td>{{$mahasiswa->nama_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan Ibu</th>
                        <td>{{$mahasiswa->pekerjaan_ibu}}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{$mahasiswa->alamat}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><span class="label label-warning">{{$mahasiswa->status_mahasiswa}}</span></td>
                    </tr>
              </tbody></table>
            </div>
        </div>
      </div>
    <div class="col-md-4">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-fluid" src="{{asset($mahasiswa->foto_mahasiswa)}}" alt="User profile picture" style="width: 100%">
          <p class="profile-name text-center"><b>{{$mahasiswa->nama_mahasiswa}}</b></hp>
        </div>
    </div>
    <div class="col-md-3">
        <div class="box-body box-profile">
            <img class="img-fluid" src="{{asset($mahasiswa->foto_ktp)}}" style="width:100%">
            <p class="text-muted text-center"><b>Foto KTP {{$mahasiswa->nama_mahasiswa}}</b></p>
          </div>
    </div>
    <div class="col-md-3">
          <div class="box-body box-profile">
            <img class="img-fluid" src="{{asset($mahasiswa->foto_ktm)}}" style="width:100%">
            <p class="text-muted text-center"><b>Foto KTM {{$mahasiswa->nama_mahasiswa}}</b></p>
          </div>
      </div>
  </div>
@endsection