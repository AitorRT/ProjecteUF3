@extends('layouts.header')
@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Videos View</h1>
                <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Primary action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-size: 17px;
        }

        #myVideo {
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
        }

        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;
        }
        a:link, a:visited {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            background-color: #f44336;
            color: white;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            float: right;
        }

        a:hover, a:active {
            background-color: red;
        }
    </style>

    <video autoplay muted loop id="myVideo">
        @if($video->route!=null)<source src="{{asset('storage/'.$video->route)}}" type="video/mp4">@endif
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <button id="myBtn" onclick="myFunction()">Pause</button>
        <a href="/home">Leave</a>
    </div>

    <script>
        var video = document.getElementById("myVideo");
        var btn = document.getElementById("myBtn");

        function myFunction() {
            if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
            } else {
                video.pause();
                btn.innerHTML = "Play";
            }
        }
    </script>




@endsection
@section('footer')
    @include('layouts.footer')
@endsection
