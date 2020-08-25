<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universitas;
use App\Korwil;
use App\Pstudi;
use App\Mahasiswa;
use Response;
use PDF;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::latest()->paginate(6);
        return view('admin.mahasiswa.index', compact('data', $data))
            ->with('i', (request()->input('page', 1) -1) * 6);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $university = Universitas::all();
        $korwil = Korwil::all();
        return view('admin.mahasiswa.create', compact('university', 'korwil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto_mahasiswa' => 'required|mimes:jpeg,jpg, gif, svg, png | max:2048',
            'foto_ktp' => 'required|mimes:jpeg,jpg, gif, svg, png | max:2048',
            'foto_ktm' => 'required|mimes:jpeg,jpg, gif, svg, png | max:2048', 
        ]);
        $foto_mahasiswa = $request->foto_mahasiswa;
        $foto_mahasiswa_baru = time(). $foto_mahasiswa->getClientOriginalName();
        $foto_ktp = $request->foto_ktp;
        $foto_ktp_baru = time(). $foto_ktp->getClientOriginalName();
        $foto_ktm = $request->foto_ktm;
        $foto_ktm_baru = time(). $foto_ktm->getClientOriginalName();

        $mahasiswa = Mahasiswa::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'phone' => $request->phone,
            'id_universitas' => $request->id_universitas,
            'id_korwil' => $request->id_korwil,
            'tahun_masuk' => $request->tahun_masuk,
            'nama_ayah' => $request->nama_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'alamat' => $request->alamat,
            'status_mahasiswa' => $request->status_mahasiswa,
            'foto_mahasiswa' => 'public/uploads/mahasiswa/'.$foto_mahasiswa_baru,
            'foto_ktp' => 'public/uploads/ktp/'.$foto_ktp_baru,
            'foto_ktm' => 'public/uploads/ktm/'.$foto_ktm_baru,
        ]);
        $foto_mahasiswa->move('public/uploads/mahasiswa/', $foto_mahasiswa_baru);
        $foto_ktp->move('public/uploads/ktp/', $foto_ktp_baru);
        $foto_ktm->move('public/uploads/ktm/', $foto_ktm_baru);

        return redirect()->back()->with('success','Data Mahasiswa Berhasil Disimpan');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrfail($id);
        return view('admin.mahasiswa.show', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrfail($id);
        return view('admin.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    public function export() 
    {
        return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
    }
}
