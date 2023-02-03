<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('product')->join('category','product.category_id','=','category.id')
        ->select('product.*','category.name AS categoryName')->get();
        return view('product.index',compact('products'));
    }
    public function add()
    {
        $category = DB::table('category')->get();
        return view('product.add',compact('category'));
    }

    public function create(Request $req)
    {
        if($req->hasFile('image')){
            $file = $req->image;
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('uploads'),$fileName);
        } else{
            $fileName = '';
        }

        $products = DB::table('product')->insert([
            'name'=>$req->name,
            'price'=>$req->price,
            'description'=>$req->des,
            'category_id'=>$req->category_id,
            'images'=>$fileName,
            'status'=>$req->status
        ]);

        if($products){
            return redirect()->route('product.index')->with('success','Thêm mới thành công');
       }
    }
     public function edit()
     {
        $products = DB::table('product')->get();
        return view('product.index',compact('products'));
     }
}
