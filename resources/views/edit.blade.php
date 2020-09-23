<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<div class="col-md-6 col-md-offset-3">
<form action="{{route('update',['id' => $data->id])}}" method="POST" role="form">
        @csrf
        <div class="form-group">
            <label for="">tên</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}" id="name">
        </div>
        <div class="form-group">
            <label for="">slug</label>
            <input type="text" class="form-control" name="slug" value="{{$data->slug}}" id="slug">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>