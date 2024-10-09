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
<h2 class="page_title">Users</h2>  
<form  class="page_button" action="/register"><button type="submit" class="btn btn-primary">Tambah Pengguna Baru</button></form>
    <table class="table">
        <thead>
            <tr>
              <th>No</th>
              <th>Username</th>
              <th>No Telepon</th>
              <th>Email</th>
              <th>Tanggal Lahir</th>
              <th>Alamat</th>
              <th>role</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php $n=0;?>
            @foreach($data as $unser)
            <tr>
              <?php $n++; ?>
              <td><?php echo ($n) ?></td>
              <td>{{ $unser->username }}</td>
              <td>{{ $unser->p_number }}</td>
              <td>{{ $unser->email }}</td>
              <td>{{ $unser->birthday }}</td>
              <td>{{ $unser->address }}</td>
              <td>{{ $unser->role }}</td>
              <td><form action="/edituser/{{$unser->id}}" method="get">
                @csrf
                <button class="btn btn-warning" onclick="submit">Update</button>
              </form><td>
              <td><form action="/admin/{{$unser->id}}" method="post">
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