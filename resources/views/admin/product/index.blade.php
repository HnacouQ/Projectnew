@extends('layouts.admin')
@section('content')
<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="text" class="form-control" id="" placeholder="Nhâp từ khóa....">
    </div>
    <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
    <span> 
    <a href="{{route('product.create')}}" class ="btn btn-success glyphicon glyphicon-plus" ></a>
    </span>
</form>
@if(Session::has('success'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{Session::get('success')}}
</div>
@endif
<table class="table table-hover">
    <thead>
        <tr>
            <th>id</th>
            <th>Ảnh sản phẩm</th>
            <th>Tên sản phẩm</th>
            {{-- <th>Danh mục</th> --}}
            <th>Trạng thái</th>
            <th>màu sắc</th>
            <th>Chức Năng</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($product as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td><img src="{{url('uploads/product')}}/{{$data->pro_detail->image}}" alt="" width = "50"></td>
            <td>{{$data->name}}</td>
            {{-- <td>{{$data->cat->name}}</td> --}}
            <td>{{$data->status}}</td>
            <td>{{$data->pro_detail->color->name}}</td>
            <td>
            <form action="{{route('product.destroy',$data->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('product.edit',$data->id)}}" class="btn btn btn-primary glyphicon glyphicon-pencil"></a>
                    <button type="submit" class="btn btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Bạn có chắc chắn không?')"></button>
                    <a href="" class="btn btn btn-warning glyphicon glyphicon-eye-open"></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection

