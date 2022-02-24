<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kepribadian;

class KepribadianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kepribadian = Kepribadian::all(); 
        return view ("kepribadian.index", compact('kepribadian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("kepribadian.tambah-kepribadian");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Kepribadian::create($request->all());

        return redirect ('/kepribadian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(kepribadian $ID)
    {
        return view('kepribadian.show', compact('ID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(kepribadian $ID)
    {
        return view('kepribadian.edit', compact('ID'));
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
        // dd($request, $id);
        Kepribadian::where('id', $request->id)
                     ->update([
                         'name' => $request->name,
                         'description' => $request->description,
                     ]);
        return redirect ('/kepribadian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(kepribadian $ID)
    {
        Kepribadian::destroy($ID->id);
        return back();
    }
}
