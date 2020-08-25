@extends('template')
@section('title','Halamana Mahasiswa')
@section('sub-title','Tambah Data Mahasiswa')

@section('content')
@if (count($errors)>0)
@foreach ($errors->all() as $error)
<div class="alert alert-danger" role="alert">
    {{ $error }}
</div>
@endforeach
@endif
@if (Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>
@endif
<form role="form" class="form-horizontal" action="{{route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Nama Mahasiswa</label>
        <div class="col-sm-8">
        <input type="text" name="nama_mahasiswa" class="form-control" required oninvalid="this.setCustomValidity('data nama mahasiswa tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$mahasiswa->nama_mahasiswa}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Tempat Lahir</label>
        <div class="col-sm-8">
        <input type="text" name="tempat_lahir" class="form-control" required oninvalid="this.setCustomValidity('data tempat lahir tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$mahasiswa->tempat_lahir}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Tanggal Lahir</label>
        <div class="col-sm-8">
        <input type="date" name="tanggal_lahir" class="form-control" required oninvalid="this.setCustomValidity('data tanggal lahir tidak boleh kosong')" oninput="setCustomValidity('')" value="{{$mahasiswa->tanggal_lahir}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="jenis kelamin">Pilih Jenis Kelamin</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="jenis_kelamin" value="{{old('jenis_kelamin')}}" required oninvalid="this.setCustomValidity('data jenis kelamin harus dipilih')" oninput="setCustomValidity('')">
                <option disabled selected>Pilih Jenis Kelamin</option>
                <option value="Pria">Pria</option>
                <option value="Wanita">Wanita</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nomot telepon">Nomor Telepon</label>
        <div class="col-sm-8">
        <input type="number" name="phone" class="form-control" required oninvalid="this.setCustomValidity('data nomor telepon tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Pilih Universitas</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="id_universitas" required oninvalid="this.setCustomValidity('data universitas harus dipilih')" oninput="setCustomValidity('')">
                <option value="" holder>Pilih Universitas</option>
                {{--  @foreach ($university as $result)
                    <option value="{{$result->id}}">{{$result->nama_universitas}}</option>
                @endforeach  --}}
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Pilih Korwil</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="id_korwil" required oninvalid="this.setCustomValidity('data korwil harus dipilih')" oninput="setCustomValidity('')">
                <option value="" holder>Pilih Korwil</option>
                {{--  @foreach ($korwil as $result)
                    <option value="{{$result->id}}">{{$result->nama_korwil}}</option>
                @endforeach  --}}
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="telepon universitas" >Tahun Masuk</label>
        <div class="col-sm-8">
        <input type="date" name="tahun_masuk" class="form-control" required oninvalid="this.setCustomValidity('data tahun masuk tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="telepon universitas" >Nama Ayah</label>
        <div class="col-sm-8">
        <input type="text" name="nama_ayah" class="form-control" required oninvalid="this.setCustomValidity('data nama ayah tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Pilih Pekerjaan Ayah</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="pekerjaan_ayah" value="{{old('pekerjaan_ayah')}}" required oninvalid="this.setCustomValidity('data pekerjaan ayah harus dipilih')" oninput="setCustomValidity('')">
                <option disabled selected>Pilih Pekerjaan Ayah</option>
                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                <option value="Guru">Guru</option>
                <option value="Pejabat Pemerintah">Pejabat Pemerintah</option>
                <option value="TNI/Polri">TNI/Polri</option>
                <option value="Waraswasta">Waraswasta</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Petani">Petani</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="telepon universitas" >Nama Ibu</label>
        <div class="col-sm-8">
        <input type="text" name="nama_ibu" class="form-control" required oninvalid="this.setCustomValidity('data nama ibu tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Pilih Pekerjaan ibu</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="pekerjaan_ibu" value="{{old('pekerjaan_ibu')}}" required oninvalid="this.setCustomValidity('data pekerjaan ibu harus dipilih')" oninput="setCustomValidity('')">
                <option disabled selected>Pilih Pekerjaan Ibu</option>
                <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil</option>
                <option value="Guru">Guru</option>
                <option value="Pejabat Pemerintah">Pejabat Pemerintah</option>
                <option value="TNI/Polri">TNI/Polri</option>
                <option value="Waraswasta">Waraswasta</option>
                <option value="Karyawan Swasta">Karyawan Swasta</option>
                <option value="Petani">Petani</option>
                <option value="Lainnya">Lainnya</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Alamat Orang Tua</label>
        <div class="col-sm-8">
        <textarea class="form-control" required oninvalid="this.setCustomValidity('data alamat tidak boleh kosong')" oninput="setCustomValidity('')" name="alamat" rows="3"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nama universitas">Pilih Status Mahasiswa</label>
        <div class="col-sm-8">
            <select class="form-control pull-right" name="status_mahasiswa" value="{{old('status_mahasiswa')}}" required oninvalid="this.setCustomValidity('data status mahasiswa harus dipilih')" oninput="setCustomValidity('')">
                <option disabled selected>Pilih Status Mahasiswa</option>
                <option value="Belum Lulus">Belum Lulus</option>
                <option value="Sudah Lulus">Sudah Lulus</option>
                <option value="Mengudurkan Diri">Mengudurkan Diri</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Upload Foto Mahasiswa</label>
        <div class="col-sm-8">
            <input type="file" name="foto_mahasiswa" class="form-control" required oninvalid="this.setCustomValidity('data upload foto mahasiswa tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Upload Foto KTP</label>
        <div class="col-sm-8">
            <input type="file" name="foto_ktp" class="form-control" required oninvalid="this.setCustomValidity('data upload foto KTP tidak boleh kosong')" oninput="setCustomValidity('')">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="alamat universitas">Upload Foto KTM</label>
        <div class="col-sm-8">
            <input type="file" name="foto_ktm" class="form-control" required oninvalid="this.setCustomValidity('data upload foto KTM tidak boleh kosong')" oninput="setCustomValidity('')">
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