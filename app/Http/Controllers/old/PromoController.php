<?php

namespace App\Http\Controllers;

use App\Models\Promo;
use App\Http\Requests\StorePromoRequest;
use App\Http\Requests\UpdatePromoRequest;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    public function getall(){
        return view('admin.category', ['kategori' => category::all()]);
    }

    public function add(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|max:255',
        ]);
        category::create($validated);

        $request->session()->flash('success', 'Kategori berhasil ditambahkan!!');

        return redirect('admin/kategori');
    }

    public function edit(Request $request, category $category)
    {
        if ($request->isMethod('get')) {
            return view('admin.categoryedit', [
                'kategori' => $category
            ]);
        } else {
            $validated = $request->validate([
                'category_name' => 'required|max:255',
            ]);

            category::where('id', $category->id)->update($validated);
            $request->session()->flash('success', 'Kategori berhasil diupdate!!');
            return redirect('admin/kategori');
        }
    }

    public function delete(Request $request, category $category){
        category::where('id', $category->id)->delete();
        $request->session()->flash('deleted', 'kategori berhasil dihapus!!');
        return redirect('admin/kategori');
    }
}
