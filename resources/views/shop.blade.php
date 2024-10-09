<!DOCTYPE html>
<html>

@extends('template.heads')
@section('landpage')
<div class="shop_page">

  <div class="container contain_shop">
    <div class="row">
      <div class="col-sm-2 col-md-1 col-lg-1 dd_shop">
          {{-- Dropdown --}}
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" onclick="dropit()">Kategori
            </button>
            <div class="dropdown-menu" id="drop_shop">
              @foreach ($data_2 as $dd_kat)
                <a class="dropdown-item" href="#">{{ $dd_kat->name }}</a>
              @endforeach
            </div>
          </div>
      </div>
        
      {{-- Search Bar --}}
      <div class="col-sm-8 col-md-10 col-lg-10">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Cari produk apa ?">
          <div class="input-group-append">
            <button class="btn btn-secondary" onclick="#" type="button" style="background-color: #ccb7a6; border-color:#000000; margin-left:5px ">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 
                0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="show_product">
    <div class="container">
      <div class="row">
        @foreach ($data as $produk)
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="product-show">
            <div class="box">
              <a href="product/{{$produk->id}}">
                <div class="img-box-2">
                  <img src="{{ asset('images/shop/2.png') }}" alt="">
                </div>
                <div class="detail-box-2">
                  <h6 class="nama_brg">
                    {{ $produk->name }}
                  </h6>
                  <h6 class="harga">
                    {{ $produk->price }}
                  </h6>
                </div>
                <div class="new" hidden>
                  <span>
                    New
                  </span>
                </div>
              </a>
            </div>
          </div>
        </div>
        @endforeach  
      </div>
    </div>
  </div>

</div>

<script>
  function dropit() {
    document.getElementById("drop_shop").classList.toggle("show");
  }
  window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
      var dropdowns = document.getElementsByClassName("dropdown-menu");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
        var openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }
</script>

@endsection