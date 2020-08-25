@extends('template')
@section('title','Halamana kampus')
@section('sub-title','Data kampus')

@section('content')
    <div class="col-xs-12">
        <div class="box-header">
            <button type="reset" class="btn btn-danger" onclick="self.history.back()"><i class="fa fa-arrow-circle-left"></i>Kembali</button>
        </div>

        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody>
                <tr>
                    <th>Nama Universitas</th>
                    <td>{{$university->nama_universitas}}</td>
                </tr>
                <tr>
                    <th>Alamat kampus</th>
                    <td>{{$university->alamat_universitas}}</td>
                </tr>
                <tr>
                    <th>Telepon Kampus</th>
                    <td>{{$university->telepon_universitas}}</td>
                </tr>
                <tr>
                    <th>Fax Kampus</th>
                    <td>{{$university->fax_universitas}}</td>
                </tr>
                <tr>
                    <th>Email Kampus</th>
                    <td>{{$university->email_universitas}}</td>
                </tr>
                <tr>
                    <th>Link Web Kampus</th>
                    <td><a href="{{$university->link_web}}">{{$university->link_web}}</a></td>
                </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
@endsection