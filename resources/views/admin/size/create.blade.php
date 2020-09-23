@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-4">
        
        <form action="{{route('size.store')}}" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="">Tên Size</label>
                <input type="text" class="form-control" name="name" id="name" >
                @error('name')
                <small class="">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Thêm mới</button>
        </form>
        
    </div>
</div>
@endsection