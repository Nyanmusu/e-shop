<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\products;
use Illuminate\Http\Request;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(carts $cart)
    {
        $cart = DB::table('carts')
            ->join('products', 'products.id', '=', 'carts.products_id')
            ->select('carts.*', 'products.name', 'products.price')
            ->get();
        return view('cart', [
            'data' => $cart
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $products_id, int $qty)
    {   
        $upqty['qty'] = $qty;
        carts::where ('products_id', $products_id) -> where('order_id', Auth()->user()->id) -> update($upqty);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $id)
    {
        $hasil=carts::where ('products_id', $id) -> where('order_id', Auth()->user()->id) -> get(); 
        return view('cart_edit',['data'=>$hasil]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(carts $cart)
    {
        //
    }

    public function add_cart(products $id)
    {

        $validatecart = ([
            'order_id' => '1',
            'products_id' => $id->id,
            'qty' => '1',
            'subtotal' => $id->price
         ]);
         
        $confirm = carts::where ('order_id', $validatecart['order_id'])-> where ('products_id', $validatecart['products_id']) -> exists();
         
        if($confirm){
        session()->flash('failed', 'Gagal Menambahkan ke cart "Produk sudah ada dalam keranjang"');
        return redirect('/product/'.$id->id);
        }
        
        // $validatecart['id'] = Auth() -> user() -> id

         carts::create($validatecart);

         session()->flash('success', 'Berhasil menambahkan produk ke cart');
 
         return redirect('/cart');
    }
}
