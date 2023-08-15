@extends('layouts.template')
@section('content')
@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
      <strong>{{ $message }}</strong>
</div>
@endif

<div class="col-md-12 bg-white p-4">
    <a href="{{url('/add')}}"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
    <table class="table table-responsive table-bordered table-hover table-stripped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th width="15%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $i => $article)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->content }}</td>
                    <td><img src="{{asset('storage/'.$article->image)}}" width="200px"></td>
                    <td>
                        <a href="{{url('/admin/edit/'.$article->id)}}"><button class="btn btn-success">Edit</button></a>
                        <a href="{{url('/admin/delete/'.$article->id)}}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection