<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreproductsRequest;
use App\Http\Requests\UpdateproductsRequest;

class ProductsController extends Controller
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
    public function store(StoreproductsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $id)
    {
        // $products = products::where('id',$id);
        $category = category::all();
        return view('admin_product_edit', [
            'data_2' => $id,
            'data' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $id)
    {
        $rules = [
            'categories_id' => 'required',
            'desc' => 'required',
            'price' => 'required|max:11',
            'qty' => 'required|max:11'
         ];

         if($request->name != $id->name){
            $rules['name'] = 'required|max:255|unique:products';
         }
         
        $validateData = $request->validate($rules);

        products::where('id',$id->id) ->update($validateData);

        session()->flash('success', 'Ploduk Berhasil Diupdate');
 
        return redirect('/Aproduct');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }

    public function setor_pform(category $category)
    {
        $category = category::all();
        return view('admin_product_add', [
            'data' => $category
        ]);
    }

    public function setor_p(Request $request)
    {
        $validatecategory = $request->validate([
           'name' => 'required|max:255|unique:products',
           'categories_id' => 'required',
           'desc' => 'required',
           'price' => 'required|max:11',
           'qty' => 'required|max:11',
        ]);

        products::create($validatecategory);

        session()->flash('success', 'Ploduk Berhasil Ditambahkan');

        return redirect('/Aproduct');
    }

    public function delete(products $id){
        products::destroy($id->id);
        session()->flash('success', 'Produk Berhasil Dihapus');
        return redirect('/Aproduct');
    }

    public function cetak_prod(products $product){
        $product = products::all();
        return view('admin_product', [
            'data' => $product
        ]);
    }
}
