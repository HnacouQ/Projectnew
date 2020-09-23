@extends('layouts.admin')
@section('content')



<form action="{{route('product.store')}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
            </div>
            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <textarea name="content" id="input" class="form-control" rows="3"></textarea>
            </div>
            
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="file" class="form-control" name="upload">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <select name="category_id" id="input" class="form-control" required="required">
                    <option value="">lựa chọn</option>
                    @foreach($category as $data)
                    <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Màu sắc</label>
                <select name="color" id="input" class="form-control" required="required">
                    <option value="">lựa chọn</option>
                    @foreach($color as $col)
                    <option value="{{$col->id}}">{{$col->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <select name="size" id="input" class="form-control" required="required">
                    <option value="">lựa chọn</option>
                    @foreach($size as $siz)
                    <option value="{{$siz->id}}">{{$siz->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">Giá khuyến mãi</label>
                <input type="number" class="form-control" name="sale_price">
            </div>
            <div class="form-group">
                    <label for="">Trạng Thái</label>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" id="input" value="0" >
                            Ẩn
                        </label>
                        <label>
                            <input type="radio" name="status" id="input" value="1" checked="checked">
                            Hiện
                        </label>
                    </div>
                </div>
        </div>
    </div>
    

    <button type="submit" class="btn btn-primary">Add</button>
</form>

    

@endsection

