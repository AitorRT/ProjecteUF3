@extends('layouts.header')
@section('content')
    <section class="py-5 text-center container">
        <div class="col-lg-12">

            <h1 class="my-4">New Video</h1>

            <form action="{{route('video.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="text" name="title" value="" placeholder="Title" class="form form-control" required>
                <br/>

                <input type="file" name="video" required>

                <br/>
                <br/>
                <input type="submit" class="btn btn-primary" value="Save">
                <br/>
                <br/>
            </form>
            </br>
        </div>
    </section>
@endsection
@section('footer')
    @include('layouts.footer')
@endsection
