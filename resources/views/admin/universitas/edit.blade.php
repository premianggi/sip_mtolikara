@extends('template')
@section('title','Halamana universitas')
@section('sub-title','Edi Data universitas')

@section('content')
<form role="form" class="form-horizontal" action="{{route('universitas.update', $university->id)}}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Nama universitas</label>
        <div class="col-sm-8">
        <input type="text" name="nama_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$university->nama_universitas}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Alamat Universitas</label>
        <div class="col-sm-8">
        <textarea class="form-control" name="alamat_universitas" rows="3" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">{{$university->alamat_universitas}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Telepon universitas</label>
        <div class="col-sm-8">
        <input type="text" name="telepon_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$university->telepon_universitas}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email universitas">Fax universitas</label>
        <div class="col-sm-8">
        <input type="text" name="fax_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$university->fax_universitas}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email universitas">Email Universitas</label>
        <div class="col-sm-8">
        <input type="email" name="email_universitas" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$university->email_universitas}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Link Web universitas</label>
        <div class="col-sm-8">
        <input type="text" name="link_web" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$university->link_web}}">
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