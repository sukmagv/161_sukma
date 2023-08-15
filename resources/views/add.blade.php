@extends('layouts.template')

@section('content')
<div class="container mt-5">
    <form action="{{url('/store')}}" method="post" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label for="title">Title : </label>
        <input type="text" class="form-control" required="required" name="title">
        <br>
        <label for="content">Content : </label>
        <textarea type="text" class="form-control" required="required" name="content"></textarea>
        <br>
        <label for="image">Image : </label>
        <input type="file" class="form-control" required="required" id="image" name="image">
        <br>
        <button type="submit" name="submit" class="btn btn-primary mt-3 mb-5" value="upload" style="width: 100px">Save</button>
      </div>
    </form>
  </div>
@endsection