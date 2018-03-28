<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
        //
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'type' => 'required'
        ]);

        $doc = new Document;
        $doc->name = $request->input('name');
        $doc->url = $request->input('url');
        $doc->type = $request->input('type');
        $doc->date = (($request->exists('date'))?$request->input('date'):'');        
        $doc->save();

        return redirect()->route('admin');


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
        $request->validate([
            'name' => 'required',
            'url' => 'required',
            'type' => 'required'
        ]);

        $doc = Document::find($id);
        $doc->name = $request->input('name');
        $doc->url = $request->input('url');
        $doc->type = $request->input('type');
        $doc->date = (($request->exists('date'))?$request->input('date'):'');
        $doc->save();

        return redirect()->route('admin');

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
        $doc = Document::find($id)->delete();
        return redirect()->route('admin');

    }
}
