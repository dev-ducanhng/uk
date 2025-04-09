@extends('admin.layout')

@section('content')
<form method="POST" action="{{route('admin.postSetLinkTopup')}}">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">URL nạp rút tiền</label>
    <input type="text" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="url" value="{{ isset($link) ? $link->url : '' }}" required>
    <small id="emailHelp" class="form-text text-muted">Link cần thêm</small>
  </div>
  @error('url')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection