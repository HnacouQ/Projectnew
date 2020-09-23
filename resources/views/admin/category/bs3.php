

<form action="" method="POST" role="form" enctype="multipart/form-data">
    <legend>Thêm mới sản phẩm</legend>

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
            <label for="">Giá sản phẩm</label>
            <input type="number" class="form-control" name="price">
        </div>
        <div class="form-group">
            <label for="">Giá khuyến mãi</label>
            <input type="number" class="form-control" name="sale_price">
        </div>
        <div class="form-group">
            <label for="">Ảnh sản phẩm</label>
            <input type="file" class="form-control" name="image">
		</div>
    </div>
    <div class="col-md-6">
        <select name="category_id" id="input" class="form-control" required="required">
            <option value="">lựa chọn</option>
            @foreach($product as $data)
            <option value="{{$data->cat->id}}">{{$data->cat->name}}</option>
            @endforeach
        </select>
        <select name="color" id="input" class="form-control" required="required">
            @foreach($color as $col)
            <option value="{{$col->id}}">{{$col->name}}</option>
            @endforeach
        </select>
        <select name="size" id="input" class="form-control" required="required">
            @foreach($size as $siz)
            <option value="{{$siz->id}}">{{$siz->name}}</option>
            @endforeach
        </select>
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
			<div class="form-group">
    </div>
    </div>

    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>



<div class="checkbox">
    <label>
        <input type="checkbox" value="">
        Checkbox
    </label>
</div>


<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
