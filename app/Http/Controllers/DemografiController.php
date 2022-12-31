<?php

namespace App\Http\Controllers;

use App\Models\Demografi;
use Illuminate\Http\Request;

class DemografiController extends Controller
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
            'titleDemografi' => 'required|max:255',
            'isiTitleDemografi' => 'required|max:255'
        ]);

        Demografi::create($validateData);

        return redirect('/profilDesa')->with('successCreateDemografi', 'Data demografi has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demografi  $demografi
     * @return \Illuminate\Http\Response
     */
    public function show(Demografi $demografi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demografi  $demografi
     * @return \Illuminate\Http\Response
     */
    public function edit(Demografi $demografi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demografi  $demografi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demografi $demografi)
    {
        $rules = [
            'titleDemografi' => 'required|max:255',
            'isiTitleDemografi' => 'required|max:255'
        ];

        $validateData = $request->validate($rules);

        Demografi::where('id', $demografi->id)->update($validateData);
        return redirect('/profilDesa')->with('successUpdatedDemografi', 'Data demografi has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demografi  $demografi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demografi $demografi)
    {
        Demografi::destroy($demografi->id);

        return redirect('/profilDesa')->with('successDeletedDemografi', 'Data demografi has been deleted!');
    }
}
