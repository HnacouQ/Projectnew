@extends('layouts.admin')
@section('content')



<form action="{{route('product.update',$data->id)}}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên sản phẩm</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}" id="name">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" name="slug" value="{{$data->slug}}" id="slug">
            </div>
            <div class="form-group">
                <label for="">Mô tả sản phẩm</label>
                <textarea name="content" id="input" class="form-control" rows="3">{{$data->content}}</textarea>
            </div>
            
            <div class="form-group">
                <label for="">Ảnh sản phẩm</label>
                <input type="hidden" name="image" value="{{$data->pro_detail->image}}">
                <input type="file" class="form-control" name="upload">
            <img src="{{url('uploads/product')}}/{{$data->pro_detail->image}}" alt="" width="80">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <select name="category_id" id="input" class="form-control" required="required">
                <option value="{{$data->cat->id}}">{{$data->cat->name}}</option>
                    @foreach($category as $cat)
                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Màu sắc</label>
                <select name="color" id="input" class="form-control" required="required">
                <option value="{{$data->pro_detail->color->id}}">{{$data->pro_detail->color->name}}</option>
                    @foreach($color as $col)
                    <option value="{{$col->id}}">{{$col->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Size</label>
                <select name="size" id="input" class="form-control" required="required">
                    <option value="{{$data->pro_detail->size->id}}">{{$data->pro_detail->size->name}}</option>
                    @foreach($size as $siz)
                    <option value="{{$siz->id}}">{{$siz->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Giá sản phẩm</label>
            <input type="number" class="form-control" value="{{$data->pro_detail->price}}" name="price">
            </div>
            <div class="form-group">
                <label for="">Giá khuyến mãi</label>
                <input type="number" class="form-control" value="{{$data->pro_detail->sale_price}}" name="sale_price">
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
    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

    

@endsection

