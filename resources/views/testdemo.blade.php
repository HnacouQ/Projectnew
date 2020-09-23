
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style>
    .pagination li a:focus{
	background-color: blue;
	color: #fff;
}

.pagination li a:hover{
	background-color: blue;
	color: #fff;
}

.pagination li a{
	color: gray;
    border: none;
    
}
.pagination .active{
    border:none;
}



    .page-item{
        padding: 5px;
        float: left;
        
        
    }

    .page-link{
        padding: 10px;
        background: red;
    }
</style>
<div class="col-md-6 col-md-offset-3">
<form action="{{route('post')}}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label for="">tên</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
            <label for="">slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<div class="col-md-6 col-md-offset-3">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>sản phẩm danh mục</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach($category as $data)
            <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->pro_name}}</td>
            <td>
            <a href="{{route('delete',['id' => $data->id])}}" class="btn btn-danger" >xóa</a>
            <a href="{{route('edit',['id' => $data->id])}}" class="btn btn-primary" >sửa</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $category->links() }}

    <form action="{{route('post')}}" method="POST" role="form">
    @csrf
        
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="size" value="1">
                    XL
                </label>
                <label>
                    <input type="checkbox" name="size" value="2">
                    L
                </label>
                <label>
                    <input type="checkbox" name="size" value="3">
                    S
                </label>
            </div>
            
        
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

