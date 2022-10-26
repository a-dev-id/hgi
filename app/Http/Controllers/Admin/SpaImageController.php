<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spa;
use App\Models\SpaImage;
use Illuminate\Http\Request;

class SpaImageController extends Controller
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
        if (empty($request->file('image'))) {
            $image = null;
        } else {
            $image = $request->file('image')->store('images/spa/image', 'public');
        }

        SpaImage::create([
            'spa_id' => $request->spa_id,
            'title' => $request->title,
            'image' => $image,
            'status' => $request->status,
        ]);
        return redirect()->route('spa-image.show', [$request->spa_id])->with('message', 'Item added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $spa =  Spa::find($id);
        $spa_image = spaImage::where('spa_id', $spa->id)->get();
        
        return view('admin.spa.image.index')->with(compact('spa', 'spa_image'));
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
        $data = SpaImage::find($id);
        $data->delete();
        return redirect()->route('spa-image.show', [$data->spa_id])->with('message', 'Item Deleted Successfully');
    }
}
