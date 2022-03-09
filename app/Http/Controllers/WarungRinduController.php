<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Order;


use Illuminate\Http\Request;

class WarungRinduController extends Controller
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
        $menu = Menu::all();
        return view ('warung_rindu.list_menu',compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('warung_rindu.create_menu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'men_image' => 'required',
            'men_cut_type' => 'required',
            'men_price' => 'required',
        ]);
  
        Menu::create([
            'men_image' => $request->men_image,
            'men_cut_type' => $request->men_cut_type,
            'men_price' => $request->men_price,
        ]);
   
        return redirect ('/list-menu')->with('success','Menu Berhasil Ditambah.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pesanan()
    {
        return view ('warung_rindu.list_pesanan');
    }

    public function createpesanan()
    {
        return view ('warung_rindu.create_pesanan');
    }

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

    public function showpesanan(){
        return view ('warung_rindu.detail_pesanan');
    }

    public function edit(Menu $menu)
    {
        return view('warung_rindu.edit_menu', compact('menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $menu)
    {
        $validatedData = $request->validate([
            'men_image' => 'required',
            'men_cut_type' => 'required',
            'men_price' => 'required',
        ]);

        Menu::find($menu)
                     ->update([
                        'men_image' => $request->men_image,
                        'men_cut_type' => $request->men_cut_type,
                        'men_price' => $request->men_price,
                     ]);
        return redirect ('/list-menu')->with('status','berhasil diubah');
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
