@extends('template')
@section('title','Halamana Kampus')
@section('sub-title','Data Kampus')

@section('content')
<form role="form" class="form-horizontal" action="{{route('pstudi.update', $pstudi->id)}}" method="post">
    {{ csrf_field() }}
    @method('PUT')
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Nama Program Studi</label>
        <div class="col-sm-8">
        <input type="text" name="nama_pstudi" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$pstudi->nama_pstudi}}">
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