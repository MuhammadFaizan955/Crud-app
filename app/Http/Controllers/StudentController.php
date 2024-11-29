<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $students = Blog::all();
         $student = Blog::all();
        return view('table', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog');
        return redirect()->route('table.index');
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
         $data = Blog::create($request->all());
        return view('blog',compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog =Blog::find($id);
        return view('editform',compact('blog') );
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
    $blog = Blog::find($id);
    $blog->update($request->all());
    return redirect()->route('table.index');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Blog::find($id)->delete();
     
        return redirect()->route('table.index');
    }
}
