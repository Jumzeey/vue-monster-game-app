<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventImages;
class eventImageController extends Controller
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
        $request->validate([
            'image_path' => 'required|mimes:jpg,png,jpeg',
        ]);

        //for multiple images
         $images = $request->file('image_path');
         $imageName = '';
         foreach($images as $img){
             $new_img = rand().'.'.$img->extension();
             $img->move(public_path('/uploads/images'.$request->input('image_id')),$new_img);
             $imageName = $imageName.$new_img.',';
         }
         $imageDb = $imageName;

         $eventImages = EventImages::create([
            'image_id' => request('image_id'),
            'image_path' => $imageDb,
        ]);
        return response()->json($eventImages);
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
    public function edit($id)
    {
        //
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
}
