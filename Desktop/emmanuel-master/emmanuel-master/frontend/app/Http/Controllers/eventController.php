<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event;
use App\Models\EventImages;

class eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events =  event::with('EventImages')->get();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //image creation and saving

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo_path' => 'required|mimes:jpg,png,jpeg',
        ]);
        //for a single image
        if ($request->hasFile('photo_path')) {
            $image = $request->file('photo_path');
            $new_name = rand().'.'.$image->extension();
            $image->move(public_path('/uploads/images'),$new_name);
        }
         //for multiple images
        //  $images = $request->file('image_paths');
        //  $imageName = '';
        //  foreach($images as $img){
        //      $new_img = rand().'.'.$img->extension();
        //      $img->move(public_path('/uploads/images'),$new_img);
        //      $imageName = $imageName.$new_img.',';
        //  }
        //  $imageDb = $imageName;

        $event = event::create([
            'title' => request('title'),
            'description' => request('description'),
            'photo_path' => $new_name,
        ]);
        return response()->json($event);
        return redirect('/events');
    }

     //saving images to db
        // $eventImages = new event_image(['image_path' => 'A new comment.']);

        // $event = event::find(1);

        // $event->eventImages()->saveMany([
        //     new event_image(['message' => 'A new comment.']),
        //     new event_image(['message' => 'Another new comment.']),
        // ]);
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = event::with('image_path')->find($id);
        return response()->json($event);
        // return $event->EventImages()->toArray();
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
