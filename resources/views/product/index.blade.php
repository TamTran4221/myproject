@extends('master')

@section('content')
@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>{{Session::get('success')}}</strong>
    </div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 ">
                <table class="table">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên</th>
                            <th>Trạng thái</th>
                            <th>Giá</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Danh mục</th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger"><i class="fa fa-bolt"> </i></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($products as $value)
                        <tr>
                            <td scope="row">{{$loop->iteration}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->status ? 'Hiện' : 'Ẩn'}}</td>
                            <td>{{$value->price}}</td>
                            <td>{{$value->description}}</td>
                            <td><img src="{{asset('uploads')}}/{{$value->images}}" alt="" width="100"></td>
                            <td>{{$value->categoryName}}</td>
                            <td>
                                <a href="{{ route('product.update')}}"title="" class="btn-success">Sửa</a>
                                <a href=""title="" class="btn-success">Xóa</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a href="{{route('product.add')}}" class="btn btn-success">Thêm mới sản phẩm</a>
            </div>
        </div>
    </div>

@stop