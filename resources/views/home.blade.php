@extends('layout')
@section('tieudetrang')
    Trang Chủ
@endsection
@section('nd_chinh')
    <div class="row">
      <div class="col-12 p-0 mt-3">
        <img src="img/slider.jpg" style="width: 100%;height: auto;" alt="">
      </div>
      <div class="p-2 text-center text-white" style="background-color: #990D23;height: 50px;">
        <h5>THOẢI THÍCH MUA SẮM CÙNG – 5S FASHION</h5>
      </div>
    </div>
<div class="container mt-5">  
      <div class="mt-3" style=" text-decoration: underline;">
        <h5>BỘ SƯU TẬP THU ĐÔNG</h5>
      </div>
      <div class="row">
        <div class="col-12">
          <img style="width: 100%; height: auto;" src="uploads/danhmuc2.png" alt="">
        </div>
      </div>
    </div>
    <div class="container mt-3 justify-content-center">
      <div class="row">
        <div class="product-grid">
          
          @foreach ($kq as $sp)
            <div class="col-3">
                        <div class="card m-2">
                           <div class="body-card">
                           <a href="{{route('spct', [$sp->id])}}">
                              <img src="img/{{$sp->img}}" alt="" class="w-100">
                           </a>
                           <div class="m-3">
                              <p>{{$sp->name}}</p>
                              <b style="font-weight: 500; color: rgb(249, 5, 5);">{{number_format($sp->price),0,",","."}}đ</b>
                              <button class="btn btn-outline-danger" style="opacity: 90%;margin-left:25px;" >Thêm vào giỏ</button>
                           </div>
                           </div>
                        </div>
                     </div>
          @endforeach
      </div>
      </div>
    </div>
<div class="container mt-5">
      <div class="mt-3" style=" text-decoration: underline; text-align: right;">
        <h5>BỘ SƯU TẬP CÔNG SỞ</h5>
      </div>
      <div class="row">
        <div class="col-12">
          <img src="img/bn_congso.jpg" style="width: 100%;height: auto;" alt="">
        </div>
      </div>
    </div>
    <div class="container mt-3 justify-content-center">
      <div class="row">
        <div class="product-grid">
          <!-- Product 1 -->
           @foreach ($cso as $sp)
            <div class="product-card">
              <a href="{{route('spct', [$sp->id])}}"><img src="img/{{$sp->img}}" alt="Product 1"></a>
              
              <div class="product-name">{{$sp->name}}</div>
              <div class="product-price">{{number_format($sp->price),0,",","."}}đ</div>
              <a href="#" class="add-to-cart">Thêm Giỏ Hàng</a>
            </div>
           @endforeach
          
      </div>
    </div>
<div class="container mt-5">
      <div class="mt-3" style=" text-decoration: underline;">
        <h5>BỘ SƯU TẬP XUÂN HÈ</h5>
      </div>
      <div class="row">
        <div class="col-12">
          <img src="img/bn_xuanhe.jpg" style="width: 100%;height: auto;" alt="">
        </div>
      </div>
    </div>
    <div class="container mt-3 justify-content-center">
      <div class="row">
        <div class="product-grid">
          <!-- Product 1 -->
          @foreach ($xuahe as $sp)
            <div class="product-card">
              <a href="{{route('spct', [$sp->id])}}"><img src="img/{{$sp->img}}" alt="Product 1"></a>
              
              <div class="product-name">{{$sp->name}}</div>
              <div class="product-price">{{number_format($sp->price),0,",","."}}đ</div>
              <a href="#" class="add-to-cart">Thêm Giỏ Hàng</a>
            </div>
           @endforeach
      </div>
    </div>

    <div class=" container text-center p-2 mt-4">
      <h2>5S FASHION</h2>
      <br>
      <div class="row">
        <div>
          <img style="width: 100%;height: auto;" src="img/slider10.png" alt="">
        </div>
        <div class="mt-5">
          <img style="width: 100%;height: auto;" src="img/Screenshot 2023-11-04 190942.png" alt="">
        </div>
      </div>
    </div>
@endsection