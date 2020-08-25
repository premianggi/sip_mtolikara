<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Mahasiswa;
class NexmoController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::latest()->paginate(6);
        return view('admin.nexmo.nexmo', compact('data', $data))
            ->with('i', (request()->input('page', 1) -1) * 6);
    }

    public function store(Request $request)
    {
        $nexmo = app('Nexmo\Client');
        $nexmo->message()->send([
            'to' => $request->no_hp,
            'from' => 'Pemda Tolikara',
            'text' => $request->pesan,
        ]);
        Session::flash('success', 'SMS Send Successfully');
        return back();
    }
}
