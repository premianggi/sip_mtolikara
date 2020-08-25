<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Universitas;
class UniversitasController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Universitas::latest()->paginate(10);
        return view('admin.universitas.index', compact('data'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.universitas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        Universitas::create($request->all());
        return redirect()->route('universitas.index')
                        ->with ('success','universitas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $university = Universitas::find($id);
        return view('admin.universitas.show', compact('university'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $university = Universitas::findOrfail($id);
        return view('admin.universitas.edit', compact('university'));
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
        $validatedData = $request->validate([
            'nama_universitas' => 'required|max:150',
            'alamat_universitas' => 'required',
            'telepon_universitas' => 'required|max:12',
            'fax_universitas' => 'required|max:13',
            'email_universitas' => 'required|max:30',
            'link_web' => 'required|max:30',
        ]);
        Universitas::whereId($id)->update($validatedData);

        return redirect('/universitas')->with('success', 'Corona Case Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $university = Universitas::findOrFail($id);
        $university->delete();

        return redirect('/universitas')->with('success', 'Universitas Data is successfully deleted');
    }
}
