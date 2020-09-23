@extends('layouts.admin')
@section('content')
<form action="" method="GET" class="form-inline" role="form">

    <div class="form-group">
        <input type="email" class="form-control" id="" placeholder="Nhâp từ khóa....">
    </div>
    <button type="submit" class="btn btn-primary glyphicon glyphicon-search"></button>
    <span> 
    <a href="{{route('size.create')}}" class ="btn btn-success glyphicon glyphicon-plus" ></a>
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
            <th>name</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($size as $data)
        <tr>
        <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>
            <form action="{{route('size.destroy',$data->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <a href="{{route('size.edit',$data->id)}}" class="btn btn btn-primary glyphicon glyphicon-pencil"></a>
                    <button type="submit" class="btn btn btn-danger glyphicon glyphicon-trash" onclick="return confirm('Bạn có chắc chắn không?')"></button>
                    <a href="" class="btn btn btn-warning glyphicon glyphicon-eye-open"></a>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
    
@endsection

