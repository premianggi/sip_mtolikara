@extends('template')
@section('title','Halamana Mahasiswa')
@section('sub-title','Data Mahasiswa')

@section('content')
    <div class="col-xs-12">
        <div class="box-header">
          <div class="col-sm-4">
            <a href="{{route('mahasiswa.create')}}" class="btn btn-success btn-sm"><i class="fa fa-plus-square"></i>Tambah Data</a>
            <a href="{{ URL::to('/getPDF') }}" class="btn btn-default btn-sm"><i class="fa fa-file-pdf-o"></i>Export to PDF</a>
             <a href="/mahasiswa/export" class="btn btn-primary btn-sm"><i class="fa fa-file-excel-o"></i>Export to Excel</a> 
            {{-- <a class="btn btn-primary" href="{{ URL::to('/mahasiswa/pdf') }}">Export to PDF</a> --}}
          </div>
          <div class="col-sm-2">
            <div class="form-group input-group-sm hidden-xs" style="width: 150px">
              <select class="form-control pull-right">
                  <option>Filter Korwil</option>
                  <option>Wamena</option>
                  <option>Jayapura</option>
                  <option>Sumatera</option>
                  <option>Ambon</option>
                  <option>Nabire</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group input-group-sm hidden-xs" style="width: 150px">
              <select class="form-control pull-right">
                  <option>Filter Tahun</option>
                  <option>2019</option>
                  <option>2020</option>
              </select>
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group input-group-sm hidden-xs" style="width: 150px">
              <select class="form-control pull-right">
                  <option>Filter Status</option>
                  <option>Belum Lulus</option>
                  <option>Sudah Lulus</option>
                  <option>Mengudurkan Diri</option>
              </select>
            </div>
          </div>
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
              <th>#</th>
              <th width="200px">Nama</th>
              <th width="200px">Universitas</th>
              <th width="200px">Korwil</th>
              <th width="200px">Tempat/Tanggal Lahir</th>
              <th width="100px">Jenis Kelamin</th>
              <th width="100px">Tahun Masuk</th>
              <th width="100px">Status</th>
              <th width="500px">Aksi</th>
            </tr>
            @foreach ($data as $result=>$mahasiswa)
              <tr>
                <td>{{$result + $data->firstitem()}}</td>
                <td>{{$mahasiswa->nama_mahasiswa}}</td>
                <td>{{$mahasiswa->universitas['nama_universitas']}}</td>
                <td>{{$mahasiswa->korwil['nama_korwil']}}</td>
                <td>{{$mahasiswa->tempat_lahir}}/{{$mahasiswa->tanggal_lahir}}</td>
                <td>{{$mahasiswa->jenis_kelamin}}</td>
                <td>{{$mahasiswa->tahun_masuk}}</td>
                <td><span class="label label-info">{{$mahasiswa->status_mahasiswa}}</span></td>
                <td>
                    <a href="{{route('mahasiswa.show', $mahasiswa->id)}}" class="btn btn-default btn-sm"><i class="fa fa-eye"></i>Show</a>
                    <a href="{{route('mahasiswa.edit', $mahasiswa->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      {!! $data->links() !!}
@endsection