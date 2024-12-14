<div class="header-container">
    <div class="container-fluid text-white d-flex justify-content-center" style="background-color: #0000; height: 80px;">
      <div class="m-3 "><img src="./uploads/logo1.png" alt="" width="180px" class="mt-1"></div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 icon1">
        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
      </svg>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="{{route('home')}}">Trang chủ</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="{{route('sanpham')}}">Sản phẩm</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php?pg=bosuutap.php">Bộ Sưu Tâp</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php?pg=tintuc.php">Tin Tức</a></div>
      <div class="mt-3">
        <form action="#" method="GET" class="timkiem ml-3" id="search-box">
          <input type="text" id="search-text" name="query" placeholder="Tìm kiếm sản phẩm" class="mt-3" required>
          <!-- <img src="./uploads/magnifying-glass.png" alt="" width="20px" height="20px" class="icon" type="submit" name="timkiem"> -->
          <!-- <input type="submit" name="timkiem" > -->
          <button type="submit" id="search-btn" name="timkiem"><i class="fa-solid fa-magnifying-glass fa-lg" width="20px" height="20px" class="icon"></i></button>
        </form>
      </div>  
      <div style="justify-content: center; padding: 30px;" class="user d-flex m-7">
        <a href="index.php?pg=viewcart"><img src="./uploads/cart-shopping-solid.svg" width="100%" alt=""></a>
      </div>
    </div>
  </div>
<style>
  #search-box{
    border-radius: 30px;
  }
  #search-box #search-text{
    border: none;
    outline: none;
    background: none;
    padding: 10px 15px;
    font-size: 14px;
  }
  #search-box #search-btn{
    background-color: #fff;
    cursor: pointer;
    border: none;
    padding: 15px;
    border-radius: 50%;
  }
</style>