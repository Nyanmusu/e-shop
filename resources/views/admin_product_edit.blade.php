<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
    <h2 class="page_title">Edit Produk</h2> 
    <form id="edit" action="/editproduct/{{$data_2->id}}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="inputAddress2">Nama Produk</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Obat pemati nyeri" value="{{ old('name', $data_2->name) }}">
        </div>
        <div class="form-group">
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
            <select class="custom-select my-1 mr-sm-2" name="categories_id" id="categories_id" style="margin-bottom: 1%">
                @foreach ($data as $cate)
                    <option value = {{$cate->id}} @if($data_2->categories_id == $cate->id) Selected @endif> {{$cate->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="inputAddress2">Deskripsi</label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Obat untuk mematikan rasa nyeri" value="{{ old('desc', $data_2->desc) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Harga</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="123000" value="{{ old('price', $data_2->price) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Kuantitas</label>
            <input type="text" class="form-control" name="qty" id="qty" placeholder="123, 12, 1, .." value="{{ old('qty', $data_2->qty) }}">
        </div>
       
        <button type="submit" form="edit" class="btn btn-primary">Update Produk</button>
    </form>
@endsection