@extends('template')
@section('title','Halamana universitas')
@section('sub-title','Data universitas')

@section('content')
    <div class="col-xs-12">
        <div class="box-header">
         <a href="{{route('universitas.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i>Tambah Data</a>

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
              <th width="200px">Nama universitas</th>
              <th width="300px">Alamat universitas</th>
              <th width="100px">Kontak Phone</th>
              <th width="200px">Email</th>
              <th width="200px">Aksi</th>
            </tr>
            @foreach ($data as $university)
            <tr>
              <td>{{$university->nama_universitas}}</td>
              <td>{{$university->alamat_universitas}}</td>
              <td>{{$university->telepon_universitas}}</td>
              <td>{{$university->email_universitas}}</td>
              <td>
                <form action="{{route('universitas.destroy', $university->id)}}" method="post">
                  <a href="{{route('universitas.show', $university->id)}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                  <a href="{{route('universitas.edit', $university->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit"><i class="fa fa-trash"></i>Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      {!! $data->links() !!}
@endsection