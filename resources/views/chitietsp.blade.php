@extends('layout')
@section('tieudetrang')
    Trang Chủ
@endsection
@section('nd_chinh')
<div class="row">
      <div class="col-6" style="position: relative;margin-top: -40px;">
        <img style="width: 100%; height: auto;" src="img/{{$spct->img}}" alt="" id="mainImage">
        <div class="d-flex">
          <img style="width: 150px; height: 140px; cursor: pointer;" src="img/{{$spct->img}}" alt=""
            onclick="changeImage('img/{{$spct->img}}')">
          <img style="width: 150px; height: 140px; cursor: pointer;" src="img/{{$spct->img}}" alt=""
            onclick="changeImage('img/bst_2.jpg')">
          <img style="width: 150px; height: 140px; cursor: pointer;" src="img/{{$spct->img}}" alt=""
            onclick="changeImage('img/bst_3.jpg')">
          <img style="width: 150px; height: 140px; cursor: pointer;" src="img/{{$spct->img}}" alt=""
            onclick="changeImage('img/bst_4.jpg')">
        </div>
      </div>
      <div class="col-6">
        <h4>{{$spct->name}}</h4>
        <span style="color: #bd0000; font-size:24px;font-weight: 600;line-height: 34px;">{{number_format($spct->price),0,",",","}}đ</span>
        <div style="background-color: #fac406;width: 42px;height: 16px;border-radius: 20px;margin-top: 10px;"
          class="d-flex">
          <img style="width: 10px;height: 10px ;margin-top: 3px;margin-left: 2px;" src="img/star.svg" alt="">
          <p style="color: aliceblue;font-size: 13px;margin-top: -2px;margin-left: 5px;">5.0</p>
        </div>
        <div style="position: relative; margin-top: -23px;margin-left: 50px;">
          <span style="color: #7b7d85; font-size: 13px; ">Đã bán 200</span>
        </div>
        <div style="margin-top: 40px;">
          <p style="font-weight: 600">Màu Sắc</p>
          <div style="width: 120px;height: 60px; background-color: #C9B7A6; margin-top: -60px;margin-left: 105px;">
          </div>
          <div style="width: 120px;height: 60px; background-color: #5A677A; margin-top: -60px;margin-left: 255px;">
          </div>
          <div style="width: 120px;height: 60px; background-color: #EFEFEF; margin-top: -60px;margin-left: 405px;">
          </div>
          <div style="width: 120px;height: 60px; background-color: #849090; margin-top:  25px;margin-left: 105px;">
          </div>
        </div>
        <div style="margin-top: 40px;">
          <p style="font-weight: 600">Kích Thước</p>
          <div class="d-flex" style="margin-top: -59px;margin-left: 95px;">
            <div
              style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
              S</div>
            <div
              style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
              M</div>
            <div
              style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
              L</div>
            <div
              style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
              XL</div>
          </div>
        </div>
        <div style="margin-top: 40px;">
          <p style="font-weight: 600">Số Lượng</p>
          <div class="quantity-container" style="margin-top: -50px;margin-left: 105px;">
            <button class="quantity-button" onclick="decreaseQuantity()">-</button>
            <input class="quantity-input" type="text" value="1" id="quantity" readonly>
            <button class="quantity-button" onclick="increaseQuantity()">+</button>
          </div>
        </div>
        <div class="mt-3 d-flex">
          <button class="m-2 custom-button">Thêm vào giỏ hàng</button>
          <button class="m-2"
            style="width: 250px;height: 45px; font-weight:500; background-color:#C81D31 ; color:#fff;border-color:#C81D31 ;">Mua
            ngay</button>
        </div>

      </div>
      <div class="container">
        <div class="row">
          <div class="text-center p-3 mt-4">
            <h4>------------------------------------------THÔNG TIN SẢN PHẨM--------------------------------------------
            </h4>
          </div>
          <div class="col-9">
            <div>
              <p style="font-size: 20px;font-weight: 500;">Áo Thun Dài Tay Nam 5S Fashion, In Chữ Combination ATO22001
              </p>
              <p>Áo Thun Dài Tay Nam 5S Fashion, In Chữ Combination ATO22001
                sở hữu kiểu dáng Slim fit vừa vặn, tôn dáng với khả năng giữ ấm cơ thể cực tốt.
                Áo thun tay dài có đa dạng màu sắc, chủ yếu là các màu basic, dễ mặc và dễ phối.
                Thiết kế trẻ trung với điểm nhấn là hình in thêu chữ Combination hiện đại.</p>
            </div>
            <div class="d-flex">
              <img style="height:400px;width: 470px;" src="img/{{$spct->img}}" alt="">
              <img style="height:400px;width: 470px;" src="img/{{$spct->img}}" alt="">
            </div>
            <div>
              <p style="font-size: 20px;font-weight: 500;">Chất liệu Viscose</p>
              <p>Chất liệu Viscose hay còn được gọi là sợi lụa nhân tạo, là một
                trong những dòng chất liệu cao cấp của 5S Fanshion . Viscose được
                tổng hợp từ chất xơ của sợi Cellulose làm từ bột ỗ như cây sồi, cây
                thông, bạch đàn tre... giúp cấu trúc của loại vải này gần như tương
                tự với Cotton. Tuy nhiên, đặc tính nổi trợi hơn nằm ở độ mềm mịn, thân
                thiện với làn da cũng như môi trường sống xung quanh.</p>
              <img style="width: 923px;height: 700px;" src="img/Vcv9AZoqCNQL4qEJyIwD2OuA8Wwu3CNOQci6jNZO.jpg" alt="">
              <img style="width: 923px;height: 700px;" src="img/i4woB2cwAmb0ells9fXgaxRoIjC8YCMuPoNxGUDi.jpg" alt="">
              <img style="width: 923px;height: 1000px;" src="img/hd_baoquan.jpg" alt="">
              <img style="width: 923px;height: 1000px;" src="img/cskh2.jpg" alt="">
              <img style="width: 923px;height: 1000px;" src="img/ve_fanshion.jpg" alt="">
            </div>
          </div>
        </div>

        <div class="p-3 mt-3">
          <h5 class="m-3" style=" text-decoration: underline;">SẢN PHẨM LIÊN QUAN</h5>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-3">
              <div class="card">
                <div class="body-card">
                  <img src="img/aonam_13.png" alt="" class="w-100">
                  <div class="m-3">
                    <p>Áo Thun Nam Ngắn Tay 5S Fashion, Thiết Kế In Chuyển Màu Trẻ Trung</p>
                    <p style="font-weight: 500; color: rgb(249, 5, 5);">229.000đ</p>
                    <div class="button_sp1">
                      <button>Thêm Giỏ Hàng</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="body-card ">
                  <img src="img/aonam_14.png" alt="" class="w-100">
                  <div class="m-3">
                    <p>Áo Thun Nam Ngắn Tay 5S Fashion, Thiết Kế In Chuyển Màu Trẻ Trung</p>
                    <p style="font-weight: 500; color: rgb(249, 5, 5);">229.000đ</p>
                    <div class="button_sp1">
                      <button>Thêm Giỏ Hàng</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="body-card ">
                  <img src="img/aonam_15.png" alt="" class="w-100">
                  <div class="m-3">
                    <p>Áo Thun Nam Ngắn Tay 5S Fashion, Thiết Kế In Chuyển Màu Trẻ Trung</p>
                    <p style="font-weight: 500; color: rgb(249, 5, 5);">229.000đ</p>
                    <div class="button_sp1">
                      <button>Thêm Giỏ Hàng</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-3">
              <div class="card">
                <div class="body-card ">
                  <img src="img/aonam_16.png" alt="" class="w-100">
                  <div class="m-3">
                    <p>Áo Thun Nam Ngắn Tay 5S Fashion, Thiết Kế In Chuyển Màu Trẻ Trung</p>
                    <p style="font-weight: 500; color: rgb(249, 5, 5);">229.000đ</p>
                    <div class="button_sp1">
                      <button>Thêm Giỏ Hàng</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
@endsection