@extends('layouts.header')
@section('content')
    <section class="py-5 text-center container">
        <div class="col-lg-12">

            <h1 class="my-4">Videos edit</h1>
            <form action="{{ route('video.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label for="title">Title</label>
                <br />
                <input type="text" name="title" value="{{ $video->title }}" class="form form-control">

                <label for="video">Video</label>
                <br />
                <!--<input type="hidden" name="video" value="{$video->route}}">-->
                <input type="file" name="video">

                <!--<label for="route">Route</label>
                    <br/>
                    <input type="text" name="route" value="$video->route}}" class="form-select form-select-lg mb-3">-->

                <br />
                <input type="submit" class="btn btn-primary" value="Save">
                <br />
                <br />
            </form>

            <br />
        </div>
    </section>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection
