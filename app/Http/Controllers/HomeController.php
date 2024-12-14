<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    function index(){
        $query = DB::table('sanpham')
        ->orderby('id', 'desc')->where('iddm','=',4)
        ->limit(4);
        $kq = $query->get();
        $cso = DB::table('sanpham')
        ->orderby('id', 'desc')->where('iddm','=',3)
        ->limit(4)
        ->get();
        $xuahe = DB::table('sanpham')
        ->orderby('id', 'desc')->where('iddm','=',20)
        ->limit(4)
        ->get();
        return view('home' , ['kq'=>$kq, 'cso'=>$cso, 'xuahe'=>$xuahe]);
    }   
    // function search(Request $request){
    //     $query = $request->input('query');
        
    //     $products = ::where('name', 'LIKE', "%$query%")
            
    //         ->paginate(10);

    //     return view('sanpham.index', compact('products'));

    // }
    
    function sanpham(){
        $dsdm = DB::table('danhmuc')
        ->orderby('id','desc')->get();
        $pro = DB::table('sanpham')
        ->orderby('id', 'desc')
        ->limit(10)
        ->get();
        return view('sanpham' , ['pro'=>$pro, 'dsdm'=>$dsdm]);
    }
    function sp_trongloai($id){
        $dsdm = DB::table('danhmuc')
        ->orderby('id','desc')->get();
        $pro_tl = DB::table('sanpham')
        ->where('iddm','=',$id)
        ->orderby('id', 'desc')
        ->get();
        return view('sp_trongloai' , ['pro_tl'=>$pro_tl, 'dsdm'=>$dsdm]);
    }
    function danhMuc(){
        $query = DB::table('danhmuc')
        ->select('id','ten');
        $kq = $query->first();
    }
    function chitiet_sp($id){
        $spct = DB::table('sanpham')
        ->where('id', $id)
        ->first();
        return view('chitietsp', ['spct'=>$spct]);
    }
    function giohang(){
        return view('giohang');
    }
    function thanhtoan(){
        return view('thanhtoan');
    }
    // function index(){
    //     $data['newProducts'] = Product::orderby('id', 'DESC')->get();
    //     return view("home", compact('data'));
    // }
}
