<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Designlist;    // 追加

class DesignlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designlist = Designlist::all();

        return view('designlist.index', [
            'designlist' => $designlist,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $design = new Designlist;

        return view('designlist.create', [
            'design' => $design,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $design = new Designlist;
        $design->name = $request->name;
        $design->description = $request->description;
        $design->image = $request->image;
        $design->save();

        return redirect('designlist');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $design = Designlist::find($id);

        return view('designlist.show', [
            'design' => $design,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $design = Designlist::find($id);

        return view('designlist.edit', [
            'design' => $design,
        ]);
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
        $design = Designlist::find($id);
        
        $design->name = $request->name;
        $design->description = $request->description;
        $design->image = $request->image;
        $design->save();

        return redirect('designlist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $design = Designlist::find($id);
        
        $design->delete();

        return redirect('designlist');
    }
}
