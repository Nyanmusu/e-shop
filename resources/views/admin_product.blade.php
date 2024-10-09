<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')

@if(session()->has('success'))
 <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<h2 class="page_title">Produk</h2>
<form  class="page_button" action="/addproduct"><button type="submit" class="btn btn-primary">Tambah Produk Baru</button></form> 
    <table class="table">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama Produk</th>
              <th>Kategori</th>
              <th>Deskripsi</th>
              <th>Harga</th>
              <th>Kuantitas</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $n=0;?>
            @foreach($data as $prod)
            <tr>
              <?php $n++; ?>
              <td><?php echo ($n) ?></td>
              <td>{{ $prod->name }}</td>
              <td>{{ $prod->categories_id }}</td>
              <td>{{ $prod->desc }}</td>
              <td>{{ $prod->price }}</td>
              <td>{{ $prod->qty }}</td>
              <td><form action="/editproduct/{{$prod->id}}" method="get">
                @csrf
                <button class="btn btn-warning" onclick="submit">Update</button>
              </form></td>

              <td><form action="/Aproduct/{{$prod->id}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="submit">Delete</button>
              </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </table>
@endsection