@extends('layout')
@section('tieudetrang')
    SẢN PHẨM
@endsection
@section('nd_chinh')
<div class="container">
    <div class="row">
        <div class="col-12">
            <img style="width: 100%; height: auto;" src="./uploads/slider8.jpg" alt="">
        </div>
    </div>
    <div class="container-fluid text-center mt-3">
        <h5>DANH MỤC SẢN PHẨM</h5>
    </div>
    <div class="container d-flex justify-content-center p-1">
        @foreach ($dsdm as $dm)
        <div class="m-3 button_sp1">
                        <a href="{{route('sptl', [$dm->id])}}">
                            <img src="./uploads/hinh.png" alt="" style="width: 100px; height: 100px">
                            <p>{{$dm->name}}</p>
                        </a>
                    </div>  
        @endforeach
    </div>
    <div>
        <h5 class="m-3 "style=" text-decoration: null; font-size:25px;">Sản phẩm</h5>
    </div>
    <div class="container mt-3 justify-content-center">
        <div class="row">
            @foreach ($pro_tl as $sp)
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
@endsection