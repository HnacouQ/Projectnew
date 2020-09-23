@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('category.store')}}" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" name="name" id="name" >
                @error('name')
                <small class="">{{$message}}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" >
                @error('slug')
                <small class="">{{$message}}</small>
                @enderror
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
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
        
    </div>
</div>
@endsection