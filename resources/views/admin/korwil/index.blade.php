@extends('template')
@section('title','Halamana Korwil')
@section('sub-title','Data Korwil')

@section('content')
    <div class="col-xs-12">
        <div class="box-header">
         <a href="{{route('korwil.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i>Tambah Data</a>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th width="300px">Nama Korwil</th>
              <th width="300px">Alamat Korwil</th>
              <th width="200px">Kontak Phone</th>
              <th width="200px">Email</th>
              <th width="200px">Aksi</th>
            </tr>
            @foreach ($data as $korwil)
            <tr>
              <td>{{$korwil->nama_korwil}}</td>
              <td>{{$korwil->alamat}}</td>
              <td>{{$korwil->kontak_phone}}</td>
              <td>{{$korwil->email}}</td>
              <td>
                <form action="{{route('korwil.destroy', $korwil->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <a href="{{route('korwil.edit', $korwil->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                  <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
@endsection