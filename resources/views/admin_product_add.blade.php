<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
    <h2 class="page_title">Tambah Kategori Baru</h2> 
    <form action="/addproduct" method="post">
        @csrf
        <div class="form-group">
            <label for="inputAddress2">Nama Kategori</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Obat pemati nyeri">
        </div>
        <div class="form-group">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
            <select class="custom-select my-1 mr-sm-2" name="categories_id" id="categories_id" style="margin-bottom: 1%">
                @foreach ($data as $prod)
                    <option value = {{$prod->id}}> {{$prod->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Deskripsi</label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Obat untuk mematikan rasa nyeri">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Harga</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="123000">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Kuantitas</label>
            <input type="text" class="form-control" name="qty" id="qty" placeholder="123, 12, 1, ..">
        </div>
       
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
@endsection