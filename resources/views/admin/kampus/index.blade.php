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
              <th>Nama Universitas</th>
              <th>Alamat Universitas</th>
              <th>Kode Pos</th>
              <th>Telepon</th>
              <th>Fax</th>
              <th>Website</th>
              <th>Email</th>
              <th>Aksi</th>
            </tr>
            <tr>
              <td>Institut Teknologi Del</td>
              <td>Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</td>
              <td>22381</td>
              <td>+62 632 331234</td>
              <td>+62 632 331116</td>
              <td>https://www.del.ac.id/</td>
              <td>info@del.ac.id</td>
              <td>
                  <a href="#" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
              </td>
            </tr>
            <tr>
                <td>Institut Teknologi Del</td>
                <td>Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</td>
                <td>22381</td>
                <td>+62 632 331234</td>
                <td>+62 632 331116</td>
                <td>https://www.del.ac.id/</td>
                <td>info@del.ac.id</td>
                <td>
                    <a href="" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Institut Teknologi Del</td>
                <td>Jl. Sisingamangaraja, Sitoluama Laguboti, Toba Samosir Sumatera Utara, Indonesia</td>
                <td>22381</td>
                <td>+62 632 331234</td>
                <td>+62 632 331116</td>
                <td>https://www.del.ac.id/</td>
                <td>info@del.ac.id</td>
                <td>
                    <a href="" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                    <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
@endsection