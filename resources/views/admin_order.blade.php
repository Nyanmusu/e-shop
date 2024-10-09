@extends('template.adm_head')
@section('admin')
<div class="" style="padding:25px 0px 25px 25px;"><h2>Pesanan</h2></div>    
    <table class="table">
        <thead>
            <tr>
              <th>No</th>
              <th>Nama Pemesan</th>
              <th>Status Pesanan</th>
              <th>Ganti Status Pesanan</th>
              <th>Pembayaran</th>
              <th>Selesaikan Pesanan</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 5; $i++) 
            <tr>
              <td>1</td>
              <td>Hendrawan</td>
              <td>Diproses</td>
              <td><button class="btn btn-warning">Update</button></td>
              <td>CoD</td>
              <td><button class="btn btn-danger">Selesaikan Pesanan</button></td>
              <td><form action="/AorderD"><button type="submit" class="btn btn-primary">Detail pesanan</button></form></td>
            </tr>
            @endfor 
          </tbody>
        </table>
    </table>

<div class="" style="padding:25px 0px 25px 25px;"><h2>Pesanan Selesai</h2></div>
<table class="table">
    <thead>
        <tr>
          <th>No</th>
          <th>Nama Pemesan</th>
          <th>Pembayaran</th>
          <th>Status Pesanan</th>
          <th>Detail</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < 5; $i++) 
        <tr>
          <td>1</td>
          <td>Hendrawan</td>
          <td>CoD</td>
          <td>Selesai</td>
          <td><form action="/AorderD"><button type="submit" class="btn btn-primary">Detail pesanan</button></form></td>
        </tr>
        @endfor 
      </tbody>
    </table>
</table> 
@endsection