<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Requests\StorecategoryRequest;
use App\Http\Requests\UpdatecategoryRequest;

class CategoryController extends Controller
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
    public function store(StorecategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecategoryRequest $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }

    public function setor(Request $request)
    {
        $validatecategory = $request->validate([
           'name' => 'required|max:255|unique:categories',
        ]);

        category::create($validatecategory);

        session()->flash('success', 'Kategori Berhasil Ditambahkan');

        return redirect('/Akategori');
    }

    public function delete(category $id){
        category::destroy($id->id);
        session()->flash('success', 'Kategori Berhasil Dihapus');
        return redirect('/Akategori');
    }

    public function cetak_kat(category $category){
        $category = category::all();
        return view('admin_kat', [
            'data' => $category
        ]);
    }
}
