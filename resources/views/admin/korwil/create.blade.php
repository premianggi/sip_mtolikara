@extends('template')
@section('title','Halamana Korwil')
@section('sub-title','Tambah Data Korwil')

@section('content')
<form role="form" class="form-horizontal" action="{{route('korwil.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label class="control-label col-sm-2" for="nama korwil">Nama Korwil</label>
        <div class="col-sm-8">
        <input type="text" name="nama_korwil" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat korwil">Alamat Korwil</label>
        <div class="col-sm-8">
        <textarea class="form-control" name="alamat" rows="3" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="telepon korwil" >Telepon Korwil</label>
        <div class="col-sm-8">
        <input type="text" name="kontak_phone" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
   
   
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email korwil">Email Korwil</label>
        <div class="col-sm-8">
        <input type="email" name="email" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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