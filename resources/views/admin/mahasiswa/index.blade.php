@extends('template')
@section('title','Halamana Kampus')
@section('sub-title','Data Kampus')

@section('content')
    <div class="col-xs-12">
        <div class="box-header">
         <a href="" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i>Tambah Data</a>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>Nama</th>
              <th>NIM</th>
              <th>Program Studi</th>
              <th>Tempat/Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Tahun Masuk</th>
              <th>Tahun Selesai</th>
              <th>Nama Ayah</th>
              <th>Pekerjaan Ayah</th>
              <th>Nama Ibu</th>
              <th>Pekerja Ibu</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
            <tr>
              <td>Premi Yigibalom</td>
              <td>11419801</td>
              <td>D4 TRPL</td>
              <td>Goyage/07/07/1999</td>
              <td>Laki-laki</td>
              <td>2016</td>
              <td>2020</td>
              <td>Melkias Yigibalom</td>
              <td>Guru SD</td>
              <td>Gerina Wanimbo</td>
              <td>Rumah Tangga</td>
              <td>Goyage</td>
              <td><span class="label label-warning">Belum Lulus</span></td>
              <td>
                  <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
              </td>
            </tr>
            <tr>
                <td>Premi Yigibalom</td>
                <td>11419801</td>
                <td>D4 TRPL</td>
                <td>Goyage/07/07/1999</td>
                <td>Laki-laki</td>
                <td>2016</td>
                <td>2020</td>
                <td>Melkias Yigibalom</td>
                <td>Guru SD</td>
                <td>Gerina Wanimbo</td>
                <td>Rumah Tangga</td>
                <td>Goyage</td>
                <td><span class="label label-warning">Belum Lulus</span></td>
                <td>
                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Premi Yigibalom</td>
                <td>11419801</td>
                <td>D4 TRPL</td>
                <td>Goyage/07/07/1999</td>
                <td>Laki-laki</td>
                <td>2016</td>
                <td>2020</td>
                <td>Melkias Yigibalom</td>
                <td>Guru SD</td>
                <td>Gerina Wanimbo</td>
                <td>Rumah Tangga</td>
                <td>Goyage</td>
                <td><span class="label label-success">Sudah Lulus</span></td>
                <td>
                    <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
@endsection