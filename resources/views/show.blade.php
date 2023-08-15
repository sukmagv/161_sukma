@extends('layouts.template')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 mt-5">
        @foreach ($article as $a)
        <div class="col mb-4">
          <div class="card">
            <img src="{{asset('storage/'.$a->image)}}" class="card-img-top" width="100%">
            <div class="card-body">
              <h5 class="card-title">{{ $a->title }}</h5><br>
              <a href="{{url('/detail/'.$a->id)}}" class="btn btn-primary">Baca Artikel</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>
@endsection