@extends('template')
@section('title','Halamana SMS')
@section('sub-title','Send SMS')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
        <h4 style="..."><i class="icon fa fa-ban"></i>{{Session('success')}}</h4>
    </div>
@endif
    <div class="col-md-4">
        <form action="{{route('nexmo.submit')}}" method="POST">
            {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>ID phone</label>

            <div class="input-group">
              <div class="input-group-addon">
                <i class="fa fa-phone"></i>
              </div>
              <input type="number" name="no_hp" id="hp" class="form-control" placeholder="Example: +6282275850769" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
            </div>
            <!-- /.input group -->
          </div>
            <div class="form-group">
                <label>Tulis Pesan</label>
                <textarea class="form-control" name="pesan" id="pesan" rows="5" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <div class="pull-right">
              <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-times"></i>Reset</button>
            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-send (alias)"></i>Kirim</button>
          </div>
        </div>
        </form>
    </div>
  <div class="col-sm-8">
      <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th width="200px">Nama Mahasiswa/i</th>
              <th width="300px">Universitas</th>
              <th width="100px">Korwil</th>
              <th width="200px">No Telepon</th>
            </tr>
            @foreach ($data as $mahasiswa)
            <tr>
              <td>{{$mahasiswa->nama_mahasiswa}}</td>
              <td>{{$mahasiswa->universitas['nama_universitas']}}</td>
              <td>{{$mahasiswa->korwil['nama_korwil']}}</td>
              <td>{{$mahasiswa->phone}}</td>
            </tr>    
            @endforeach
          </tbody></table>
        </div>
        {!! $data->links() !!}
  </div>
@endsection