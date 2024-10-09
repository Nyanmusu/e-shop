<!DOCTYPE html>
<html>

@extends('template.heads')
@section('landpage')

@if(session()->has('failed'))
 <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('failed') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<div class="container">
    <div class="row product">
        <div class="col-sm-12 col-md-6 col-lg-6 product-img">
            <img src="images/p2.png" alt="">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 product-desc">
            <h1 class="nama_produk">{{$data_2->name}}</h1>
            <h4 class="harga_produk">{{$data_2->price}}</h4>
            <h5>Jumlah :</h5>
            {{-- <div class="wrapper">
                <span class="minus">-</span>
                <span class="number">01</span>
                <span class="plus">+</span>
            </div> --}}
            <form action="/addcart/{{$data_2->id}}" method="post"><button onclick="submit">@csrf Tambah ke Kerajang</button></form>
            <h5 class="deskripsi_p">Deskripsi :</h5>
            <p class="deskripsi_produk"> {{$data_2->desc}} <p>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 komentar" style="text-align: left">
            <h3>Komentar</h3>
            @for ($i = 0; $i < 10; $i++)
                <div style="border: 1px solid #000000; border-radius: 10px; margin-bottom:1%; padding-left:1%">
                    <div>
                    
                    <h4 style="padding-bottom: 10px; padding-top: 5px"><img src="images/com_test.png" alt="" style="max-width: 40px; border: 1px solid #000000; border-radius: 50%; margin-right:5px;">Juanedi</h4>
                    </div>
                    
                    <p>Bagus sekali</p>
                </div>
            @endfor  
        </div>

    </div>
</div>

{{-- <script>
const plus = document.querySelector(".plus"), 
minus = document.querySelector(".minus"),
number = document.querySelector(".number")
let ffs = document.querySelector(".number")
let qty = 1;

plus.addEventListener("click", ()=>{   
    if (qty >= ffs){

    }
    else{
    qty++;
    qty = (qty < ffs) ? "0" + qty : qty;
    number.innerText = qty;
    console.log(qty);
    }

});

minus.addEventListener("click", ()=>{
    if (qty <= 0){

    }
    else{
    qty--;
    qty = (qty < ffs) ? "0" + qty : qty;
    number.innerText = qty;
    console.log(qty);
    }
});
</script> --}}

@endsection