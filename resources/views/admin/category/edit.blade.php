@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('category.update',$data->id)}}" method="POST" role="form">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="">Tên danh mục</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$data->name}}" >
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" value="{{$data->slug}}" >
            </div>
            
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="input" value="1" checked="checked">
                    Hiển thị
                </label>
                <label>
                    <input type="radio" name="status" id="input" value="0" >
                    Ẩn
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
        
    </div>
</div>
@endsection