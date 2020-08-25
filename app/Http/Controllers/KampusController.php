<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kampus;
class KampusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kampus::latest()->paginate(7);
        return view('admin.kampus.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 7);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kampus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kampus::create($request->all());
        return redirect()->route('kampus.index')
                        ->with ('success','kampus created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_kampus)
    {
        $kampus = Kampus::find($id_kampus);
        return view('admin.kampus.show', compact(['kampus']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_kampus)
    {
        $kampus = Kampus::find($id_kampus);
        return view('admin.kampus.edit', compact('kampus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kampus $kampus)
    {
        $kampus->update($request->all());
        return redirect()->route('kampus.index')
                        ->with('success','kampus Updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kampus $kampus)
    {
        $kampus->delete();
        return redirect()->route('kampus.index')
                ->with('success', 'Data kampus Deleted Successfully.');
    }
}
