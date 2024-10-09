<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
    <h2 class="page_title">Tambah Kategori Baru</h2> 
    <form action="/addproduct" method="post">
        @csrf
        <div class="form-group">
            <label for="inputAddress2">Username</label>
            <input type="varchar" class="form-control" name="username" id="username" placeholder="Username" value="{{ old('name', $data_2->username) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Paswword" value="{{ old('name', $data_2->password) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">No Telepon</label>
            <input type="integer" class="form-control" name="p_number" id="p_number" placeholder="0812301" value="{{ old('name', $data_2->p_number) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Aemail@mail.com" value="{{ old('name', $data_2->email) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Tanggal Lahir</label>
            <input type="date" class="form-control" name="birthday" id="birthday" placeholder="" value="{{ old('name', $data_2->birthday) }}">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Alamat</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Jalan jalan sendiri :( " value="{{ old('name', $data_2->address) }}">
        </div>
       
        <button type="submit" class="btn btn-primary">Edit data diri</button>
    </form>
@endsection