@extends('template')
@section('title','Halamana Program Studi')
@section('sub-title','Data Program Studi')

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
              <th>Nama Program Studi</th>
              <th>Aksi</th>
            </tr>
            <tr>
              <td>Pulau Sumatera</td>
              <td>
                  <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                  <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
              </td>
            </tr>
            <tr>
                <td>Pulau Sumatera</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
              <tr>
                <td>Pulau Sumatera</td>
                <td>
                    <a href="#" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
@endsection