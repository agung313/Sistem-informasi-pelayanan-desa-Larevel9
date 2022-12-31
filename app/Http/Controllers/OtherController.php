<?php

namespace App\Http\Controllers;

use App\Models\Other;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('adminDashboard.other',[
            'title' => 'Other in System',
            'profil' => ProfilDesa::firstWhere('id', 1),
            'other' => Other::firstWhere('id', 1)
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Other $other)
    {

    }

    public function updateSystem(Request $request, Other $other)
    {
        $rules = [
            'shortTitle' => 'max:255',
            'fullTitle' => 'max:255',
            'informationSystem' => 'max:255',
            'contactUsTelpon' => 'max:255',
            'contactUsEmail' => 'max:255',
            'operationDay' => 'max:255',
            'operationTime' => 'max:255',
        ];

        $validateData = $request->validate($rules);

        Other::where('id', $other->id)->update($validateData);

        return redirect('/other')->with('succesUpdatedSystem', 'Related to The System has been updated!');
    }

    public function updateImage(Request $request, Other $other)
    {
        $rules = [
            'fotoPertama' => 'image|file|max:5024',
            'fotoKedua' => 'image|file|max:5024',
            'fotoKetiga' => 'image|file|max:5024',
        ];

        $validateData = $request->validate($rules);

        if($request->file('fotoPertama')){
            if($request->oldFotoPertamaSlide){
                Storage::delete($request->oldFotoPertamaSlide);
            }
            $validateData['fotoPertama'] = $request->file('fotoPertama')->store('image-slide');
        }

        if($request->file('fotoKedua')){
            if($request->oldFotoKeduaSlide){
                Storage::delete($request->oldFotoKeduaSlide);
            }
            $validateData['fotoKedua'] = $request->file('fotoKedua')->store('image-slide');
        }

        if($request->file('fotoKetiga')){
            if($request->oldFotoKetigaSlide){
                Storage::delete($request->oldFotoKetigaSlide);
            }
            $validateData['fotoKetiga'] = $request->file('fotoKetiga')->store('image-slide');
        }

        Other::where('id', $other->id)->update($validateData);

        return redirect('/other')->with('succesUpdatedImage', 'Image Slide has been updated!');
    }

    public function updateLink(Request $request, Other $other)
    {
        $rules = [
            'youtubeLink' => 'max:255',
            'facebookLink' => 'max:255',
            'instagramLink' => 'max:255',
            'googleLink' => 'max:255',
            'whatsAppLink' => 'max:255',
        ];

        $validateData = $request->validate($rules);

        Other::where('id', $other->id)->update($validateData);

        return redirect('/other')->with('succesUpdatedLink', 'Link has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        //
    }
}
