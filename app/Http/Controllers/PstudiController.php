<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pstudi;
class PstudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pstudi::latest()->paginate(7);
        return view('admin.pstudi.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) *7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pstudi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pstudi::create($request->all());
        return redirect()->route('pstudi.index')
                        ->with('success', 'Program Studi created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pstudi $pstudi)
    {
        return view('admin.pstudi.edit', compact('pstudi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pstudi $pstudi)
    {
        $pstudi->update($request->all());
        return redirect()->route('pstudi.index')
                        ->with('success', 'Program Studi Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pstudi $pstudi)
    {
        $pstudi->delete();
        return redirect()->route('pstudi.index')
                        ->with('success','Program Studi Deleted Successfully.');
    }
}
