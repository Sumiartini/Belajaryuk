<?php

namespace App\Http\Controllers;

use App\BrandSkincare;
use Illuminate\Http\Request;

class BrandSkincareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brandskincares = BrandSkincare::all();
        // dd($brandskincares);
        return view ('brand-skincare.index',compact('brandskincares'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand-skincare.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $brandSkincare = new BrandSkincare;
        // $brandSkincare->name = $request->name;
        // $brandSkincare->description = $request->description;
        // $brandSkincare->save();

        // BrandSkincare::create([
        //     'name' => $request->name,
        //     'description' => $request->description,
        // ]);
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        BrandSkincare::create($request->all());

        return redirect ('/brand-skincare')->with('status','berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BrandSkincare  $brandSkincare
     * @return \Illuminate\Http\Response
     */
    public function show(BrandSkincare $brandSkincare)
    {
        return view('brand-skincare.show', compact('brandSkincare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BrandSkincare  $brandSkincare
     * @return \Illuminate\Http\Response
     */
    public function edit(BrandSkincare $brandSkincare)
    {
        return view ('brand-skincare.edit', compact('brandSkincare'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BrandSkincare  $brandSkincare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BrandSkincare $brandSkincare)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        BrandSkincare::where('id', $brandSkincare->id)
                     ->update([
                         'name' => $request->name,
                         'description' => $request->description,
                     ]);
        return redirect ('/brand-skincare')->with('status','berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BrandSkincare  $brandSkincare
     * @return \Illuminate\Http\Response
     */
    public function destroy(BrandSkincare $brandSkincare)
    {
        BrandSkincare::destroy($brandSkincare->id);
        return redirect ('/brand-skincare')->with('status','berhasil dihapus');
    }
}
