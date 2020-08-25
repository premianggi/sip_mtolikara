<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table{
            width: 100%;
            margin: 0 auto;
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>DATA MAHASISWA/I TOLIKARA SE-INDONESIA<</h2>
    <P>Alamat Kantor:...</P>
    <p>Telepon:...</p>
    <table class="table table-hover">
        <tbody>
            @foreach ($mahasiswa as $key=>$data)
            <tr>
                <th><br></th>
                <td><br></td>
            </tr>
            <tr>
                <th>Nama mahasiswa</th>
                <td>{{$data->nama_mahasiswa}}</td>
            </tr>
            <tr>
                <th>Universitas</th>
                <td>{{$data->universitas['nama_universitas']}}</td>
            </tr>
            <tr>
                <th>Korwil</th>
                <td>{{$data->korwil['nama_korwil']}}</td>
            </tr>
            <tr>
                <th>Tempat/Tanggal Lahir</th>
                <td>{{$data->tempat_lahir}}/{{$data->tanggal_lahir}}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{$data->jenis_kelamin}}</td>
            </tr>
            <tr>
                <th>Tahun Masuk</th>
                <td>{{$data->tahun_masuk}}</td>
            </tr>
            <tr>
                <th>Status</th>
                <td><span class="label label-info">{{$data->status_mahasiswa}}</span></td>
            </tr>
        @endforeach
      </tbody></table>
</body>
</html>