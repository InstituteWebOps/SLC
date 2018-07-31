<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class MembersController extends Controller
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
            'designation' => 'required',
            'type' => 'required'
        ]);

        $person = new Person;
        $person->name = $request->input('name');
        $person->designation = $request->input('designation');
        $person->type = $request->input('type');
        $person->emailID = $request->input('emailID');
        $person->contact = $request->input('contact');
        // $person->date = (($request->exists('date'))?$request->input('date'):'');
        $person->save();

        return redirect()->route('admin', ['view' => 'mem']);

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
            'designation' => 'required',
            'type' => 'required'
        ]);

        $person = Person::find($id);
        $person->name = $request->input('name');
        $person->designation = $request->input('designation');
        $person->type = $request->input('type');
        $person->emailID = $request->input('emailID');
        $person->contact = $request->input('contact');
        // $doc->date = (($request->exists('date'))?$request->input('date'):'');
        $person->save();

        return redirect()->route('admin', ['view' => 'mem']);

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
        $doc = Person::find($id)->delete();

        return redirect()->route('admin', ['view' => 'mem']);

    }
}
