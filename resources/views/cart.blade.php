@extends('template.heads')
@section('landpage')
<div class="container">
    <h1>Keranjang Belanja</h1>
    <table class="table">
        <tr>
            <th>Produk</th>
            <th>Harga Satuan</th>
            <th>Kuantitas</th>
            <th>Edit kuantitas</th>
            <th>Subtotal</th>
        </tr>
        @foreach ($data as $cart)
        <tr>
            <td>{{$cart->name}}</td>
            <td>{{$cart->price}}</td>
            <td>{{$cart->qty}}</td>
            <td><a href="/editcart/{{$cart->products_id}}">
                <button class="btn btn-warning" onclick="submit">Update</button>
            </a></td>
            <td>{{$cart->subtotal}}</td>
        </tr>
        @endforeach
    </table>

    <div class="totalan">
        <h4>Total : $dada</h4>
    </div>
</div>

@endsection