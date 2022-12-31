<?php

namespace App\Http\Controllers;

use App\Models\DataApbdesa;
use Illuminate\Http\Request;

class DataApbdesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'titleData' => 'required|max:255',
            'isiData' => 'max:255',
            'colorData' => 'max:255'
        ]);

        DataApbdesa::create($validateData);

        return redirect('/apbdesa')->with('successCreatedDataApbdes', 'Data APBDES has ben created!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataApbdesa  $dataApbdesa
     * @return \Illuminate\Http\Response
     */
    public function show(DataApbdesa $dataApbdesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataApbdesa  $dataApbdesa
     * @return \Illuminate\Http\Response
     */
    public function edit(DataApbdesa $dataApbdesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataApbdesa  $dataApbdesa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataApbdesa $dataApbdesa)
    {
        $rules = [
            'titleData' => 'required|max:255',
            'isiData' => 'max:255',
            'colorData' => 'max:255'
        ];

        $validateData = $request->validate($rules);

        DataApbdesa::where('id', $dataApbdesa->id)->update($validateData);

        return redirect('/apbdesa')->with('successUpdatedDataApbdes', 'Data APBDES has ben updated!');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataApbdesa  $dataApbdesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataApbdesa $dataApbdesa)
    {
        DataApbdesa::destroy($dataApbdesa->id);

        return redirect('/apbdesa')->with('successDeletedDataApbdes', 'Data APBDES has ben deleted!');
    }
}
