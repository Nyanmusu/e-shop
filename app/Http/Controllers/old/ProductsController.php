<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function add(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('admin.produkform', [
                'kategori' => category::all()
            ]);
        } else {
            $validated = $request->validate([
                'product_name' => 'required|max:255',
                'category_id' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'stock' => 'required',
            ]);
            Products::create($validated);

            $request->session()->flash('success', 'Produk berhasil ditambahkan!!');

            return redirect('admin/produk');
        }
    }

    public function getall()
    {
        $data = DB::table('products')
                ->join('categories', 'products.category_id', '=', 'categories.id')
                ->select('products.*', 'categories.category_name')
                ->get();
        // return $data;
        return view('admin.produk', [
            'produk' => $data
        ]);
    }

    public function edit(Request $request, Products $products)
    {
        if ($request->isMethod('get')) {
            return view('admin.produkedit', [
                'produk' => $products,
                'kategori' => category::all()
            ]);
        } else {
            $validated = $request->validate([
                'product_name' => 'required|max:255',
                'category_id' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
                'stock' => 'required',
            ]);

            // return $validated;
            Products::where('id', $products->id)->update($validated);
            $request->session()->flash('success', 'Produk berhasil diupdate!!');
            return redirect('admin/produk');
        }
    }

    public function delete(Request $request, Products $products){
        Products::where('id', $products->id)->delete();
        $request->session()->flash('deleted', 'Produk berhasil dihapus!!');
        return redirect('admin/produk');
    }
}
