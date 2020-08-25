@extends('template')
@section('title','Halamana Universitas')
@section('sub-title','Tambah Data Universitas')

@section('content')
<form role="form" class="form-horizontal" action="{{route('universitas.store')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Nama Universitas</label>
        <div class="col-sm-8">
        <input type="text" name="nama_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Alamat Universitas</label>
        <div class="col-sm-8">
        <textarea class="form-control" name="alamat_universitas" rows="3" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="telepon universitas" >Telepon Universitas</label>
        <div class="col-sm-8">
        <input type="text" name="telepon_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
   
   
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="fax universitas">Fax Universitas</label>
        <div class="col-sm-8">
        <input type="text" name="fax_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
   
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email universitas">Email Universitas</label>
        <div class="col-sm-8">
        <input type="email" name="email_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="link website">Link Website</label>
        <div class="col-sm-8">
        <input type="text" name="link_web" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
   
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger" onclick="self.history.back()">Batal</button>
        </div>
    </div>
</form>
@endsection