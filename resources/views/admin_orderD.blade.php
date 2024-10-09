<!DOCTYPE html>
<html>

@extends('template.adm_head')
@section('admin')
<h2 class="page_title">Produk</h2>  
<h3>Nama pemesan : Hendrawan</h3>
    <table class="table">
        <thead>
            <tr>
              <th>No</th>
              <th>Id Produk</th>
              <th>Nama Produk</th>
              <th>Kuantitas</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>
            @for ($i = 0; $i < 10; $i++) 
            <tr>
              <td>1</td>
              <td>1</td>
              <td>Masker</td>
              <td>12</td>
              <td>Rp.600.000</td>
            </tr>
            @endfor
          </tbody>
        </table>
    </table>
    <div class="" style="padding:25px 0px 25px 25px;"><h4>Total Keseluruhan : Rp 6.000.000</h4></div>
@endsection