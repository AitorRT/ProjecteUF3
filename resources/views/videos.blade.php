@extends('layouts.header')
@section('content')
    <style>
        input.form.form-control{
            margin-left: 300px;
            width: 500px;
        }
    </style>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Videos</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="{{route('video.create')}}" class="btn btn-primary my-2">Push new video</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($videos as $video)
                    @if(Auth::user()->id == $video['user_id'])

                        <div class="col">

                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>{{$video->title}}</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$video->title}}</text></svg>
                                <div class="card-body">
                                    <p class="card-text">Created: {{$video->created_at}}</p>
                                    <p><small class="text-muted">Updated: {{$video->updated_at}}</small></p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="{{route('video.show',$video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                                            <a href="{{route('video.edit',$video->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Edit</button></a>
                                        </div>
                                        <a href="{{route('video.delete',$video->id)}}"><button type="button" class="btn btn-sm btn-outline-danger">Delete</button></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach

        </div>
    </div>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection
