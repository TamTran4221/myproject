@extends('master')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 ">
            <form method="POST" action="" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="tên sản phẩm" value="{{$products->name}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="price" aria-describedby="emailHelp" placeholder="Giá sản phẩm">
                    
                </div>
                    <div class="form-group">
                      <label for="">Danh mục</label>
                      <select class="form-control" name="category_id" id="">
                        @foreach($category as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                      </select>
                    </div>   
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả sản phẩm</label>
                    <textarea name="des" id="input" class="form-control" value="{{$produts->des}}"></textarea>
               
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" name="image" aria-describedby="emailHelp" placeholder="Enter email" value="{{$products->fileName}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="d-block">Trạng thái</label>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="" value="0" {{$products->status==0 ? 'checked': ''}}> Ẩn
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="" value="0" {{$products->status==1 ? 'checked': ''}}> Hiện
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
                
            </div>
        </div>
    </div>

@stop