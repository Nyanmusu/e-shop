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
<h2 class="page_title">Kategori Produk</h2> 
<form  class="page_button" action="/addkategori"><button type="submit" class="btn btn-primary">Tambah Kategori Baru</button></form>
    <table class="table">
        <thead>
            <tr>
              <th>No</th>
              <th>Kategori</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $n=0;?>
            @foreach($data as $kat)
            <tr>
              <?php $n++; ?>
              <td><?php echo ($n) ?></td>
              <td>{{ $kat->name }}</td>
              <td><form action="#"><button type="submit" class="btn btn-warning">Edit</button></form></td>
              <td><form action="/Akategori/{{$kat->id}}" method="post">
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