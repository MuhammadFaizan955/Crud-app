<?php

namespace App\Http\Controllers;

use App\Models\Fais;
use Illuminate\Http\Request;

class FaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = fais::simplepaginate(6);
        return view('list.read', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('list.form');
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
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

        $data = Fais::create($request->all());
        // return view('blog',compact('data'));
        return redirect()->route('task.index')
        ->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fais  $fais
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $student = fais::find($id);
        return view('list.log', compact('student'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fais  $fais
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $fais =fais::find($id);
        return view('list.update',compact('fais') );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fais  $fais
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id )
    {
        //

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',
        ]);

         $fais = fais::find($id);
        $fais->update($request->all());
        return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fais  $fais
     * @return \Illuminate\Http\Response
     */

        //
        public function destroy($id)
        {
            // Find the record by ID
            $fais = fais::find($id);
            $fais -> delete();
            return redirect()->route('task.index');
}

}
