<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
    <h2 class="page_title">Edit Produk</h2> 
    <form id="edit" action="/editproduct/{{$data->products_id}}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="inputAddress2">Kuantitas</label>
            <input type="text" class="form-control" name="qty" id="qty" placeholder="123, 12, 1, .." value= {{$data->qty}}>
        </div>
        <h2>{{$data->qty}}<h2>
        <button type="submit" form="edit" class="btn btn-primary">Update Produk</button>
    </form>
@endsection