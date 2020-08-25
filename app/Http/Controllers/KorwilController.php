<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Korwil;
class KorwilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Korwil::latest()->paginate(10);
        return view('admin.korwil.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.korwil.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Korwil::create($request->all());
        return redirect()->route('korwil.index')
                        ->with ('success','Korwil created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Korwil $korwil)
    {
        return view('admin.korwil.show', compact('korwil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Korwil $korwil)
    {
        return view('admin.korwil.edit', compact('korwil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Korwil $korwil)
    {
        $korwil->update($request->all());
        return redirect()->route('korwil.index')
                        ->with('success','Korwil Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Korwil $korwil)
    {
        $korwil->delete();
        return redirect()->route('korwil.index')
                ->with('success', 'Data Korwil Deleted Successfully.');
    }
}
