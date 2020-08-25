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
<form role="form" class="form-horizontal" action="{{('sms')}}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">Mobile Number</label>
        <div class="col-sm-8">
        <input type="text" name="mobile" id="mobile" class="form-control" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Send SMS</button>
        <button type="reset" class="btn btn-danger" onclick="self.history.back()">Batal</button>
        </div>
    </div>
</form>
@endsection