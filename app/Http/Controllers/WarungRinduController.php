<?php

namespace App\Http\Controllers;
use App\Menu;
use App\Order;
use App\User;
use App\Customer;
use DB;



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

        $nm = $request->men_image;
        $namaFile = $nm->getClientOriginalName();
  
            $dtUpload = new Menu;
            $dtUpload->men_image = $namaFile;
            $dtUpload->men_cut_type = $request->men_cut_type;
            $dtUpload->men_price = $request->men_price;
            $dtUpload->men_stock = $request->men_stock;

            $nm->move(public_path().'/assets'.'/images'.'/chicken', $namaFile);
            $dtUpload->save();

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
        $pesanan = Customer::all();
        return view ('warung_rindu.list_pesanan', compact('pesanan'));
    }

    public function createpesanan()
    {
        $menu = Menu::select('men_id', 'men_cut_type')->get();
        return view ('warung_rindu.create_pesanan', compact('menu'));
    }

    public function storepesanan(Request $request)
    {
        // dd($request);
        $request->validate([
            'cus_name' => 'required',
            'ord_men_id'   => 'required',
            'ord_quantity' => 'required',
        ]);
            
            $data = $request->all();
            $customer = new Customer;
            $customer->cus_name = $data['cus_name'];
            // dd($customer);
            $customer->save();
            
             foreach ($data['ord_men_id'] as $item => $value){
                    $menu = Menu::where('men_id', $data['ord_men_id'][$item])->first();
                    $stok = $menu->men_stock;
                    if($stok >= $data['ord_quantity'][$item]){
                        $data2 = array(
                            'ord_cus_id' => $customer->cus_id,
                            'ord_men_id' => $data['ord_men_id'][$item],
                            'ord_quantity' => $data['ord_quantity'][$item],
                        );
                        $menu->update(['men_stock' => $stok - $data['ord_quantity'][$item]]);
                    }else{
                        return back()->with('error','Banyak beli melebihi stok tersedia');
                    }


                    Order::create($data2);
                }
           
            
        return redirect ('/list-pesanan')->with('success','Pesanan Berhasil Ditambah.');
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

    public function showpesanan($id){
        // dd($id);
        $customer = Customer::where('cus_id',$id)->get();
        $pesanancek = Order::where('orders.ord_cus_id',$id)->first();
        $pesanan = Order::join('menu','orders.ord_men_id','=','menu.men_id')

                        ->where('orders.ord_cus_id',$id)
                        ->get();
        // dd($pesanan);
        $totalHarga = Order::join('menu','orders.ord_men_id','=','menu.men_id')
                        ->where('orders.ord_cus_id',$id)
                        ->sum(DB::raw('ord_quantity * men_price'));
        // dd($totalHarga);
        
        return view ('warung_rindu.detail_pesanan', compact('pesanan','customer','totalHarga'));
    }

    public function edit(Menu $menu)
    {
        // dd($menu);
        Menu::find($menu);
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
        // dd($menu);
        $validatedData = $request->validate([

            'men_cut_type' => 'required',
            'men_price' => 'required',
            'men_stock' => 'required',
        ]);
        
        $ubah = Menu::find($menu);
        $cek = Order::where('ord_men_id',$menu)->count();
        if($cek != 0){
            return back()->with('error','Menu tidak bisa diubah');
        }
        $image = $request->men_image;
        if($image)
        {
            
            $dt = [
                'men_image' => $request->men_image->getClientOriginalName(),
                'men_cut_type' => $request['men_cut_type'],
                'men_price' => $request['men_price'],
                'men_stock' => $request['men_stock'],
            ];
    
            $request->men_image->move(public_path().'/assets'.'/images'.'/chicken', $image);
            $ubah->update($dt);
        }else{
            $dt = [
                'men_cut_type' => $request['men_cut_type'],
                'men_price' => $request['men_price'],
                'men_stock' => $request['men_stock'],
            ];
            $ubah->update($dt);    
        }

        return redirect('/list-menu')->with('success', 'Menu berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {   
        // dd($menu);
        $cek = Order::where('ord_men_id',$menu->men_id)->count();
        if($cek != 0){
            return back()->with('error','Menu tidak bisa dihapus');
        }
        Menu::destroy($menu->men_id);
        
        return back()->with('error','Menu berhasil dihapus');
    }
}
