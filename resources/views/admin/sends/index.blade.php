@extends('template')
@section('title','Halamana Mengirimkan Pesan')
@section('sub-title','Data Send')

@section('content')
<div class="col-md-4">
      <!-- /.box-header -->
      <div class="box-body">
        <div class="form-group">
            <div class="col-sm-12">
            <textarea class="form-control" name="alamat_universitas" rows="5" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
            </div>
        </div>
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <div class="pull-right">
            <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Discard</button>
          <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-envelope-o"></i> Send Mesage</button>
        </div>
      </div>
  </div>
<div class="col-sm-8">
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody><tr>
            <th></th>
            <th>ID</th>
            <th width="200px">Nama Mahasiswa/i</th>
            <th width="300px">Universitas</th>
            <th width="100px">Korwil</th>
            <th width="200px">No Telepon</th>
          </tr>
          <tr>
            <td><input type="checkbox" name="mobile[]" class="checkbox" value=""></td>
            <td>1</td>
            <td>Premi Yigibalom</td>
            <td>Institut Teknologi Del</td>
            <td>Pulau Sumatera</td>
            <td>081351892547</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mobile[]" class="checkbox" value=""></td>
            <td>2</td>
            <td>Juli Rianty Yigibalom</td>
            <td>Institut Teknologi Del</td>
            <td>Pulau Sumatera</td>
            <td>081351892547</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mobile[]" class="checkbox" value=""></td>
            <td>3</td>
            <td>Otomi Wenda</td>
            <td>Institut Teknologi Del</td>
            <td>Pulau Sumatera</td>
            <td>081351892547</td>
          </tr>
          <tr>
            <td><input type="checkbox" name="mobile[]" class="checkbox" value=""></td>
            <td>4</td>
            <td>Jumprem Yigibalom</td>
            <td>Institut Teknologi Del</td>
            <td>Pulau Sumatera</td>
            <td>081351892547</td>
          </tr>
        </tbody></table>
      </div>
</div>
@endsection