<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
    <h2 class="page_title">Tambah Kategori Baru</h2> 
    <form action="/addkategori" method="post">
        @csrf
        <div class="form-group">
        <label for="inputAddress2">Nama Kategori</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Obat, Disposable, Alat bantu .....">
        </div>
        
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>
@endsection