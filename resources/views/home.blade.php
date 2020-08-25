@extends('template')
@section('title','Dashboard')
@section('content')
<div class="row">
    <div class="col-md-6">
      <div class="info-box">
        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Jumlah Mahasiswa/i</span>
          <span class="info-box-number">90<small>%</small></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-6">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-maps-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Daftar Korwil</span>
          <span class="info-box-number">2,000</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
@endsection