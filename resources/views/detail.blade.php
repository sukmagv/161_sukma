@extends('layouts.template')
@section('content')
<div class="m-5 bg-white p-0">
    <h2>{{ $article->title }}</h2>
    <img src="{{asset('storage/'.$article->image)}}" class="card-img-top" width="100%">
    <div>
        <p>{{ $article->content }}</p>
    </div>
</div>
@endsection