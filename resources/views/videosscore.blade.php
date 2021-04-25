@extends('layouts.header')
@section('content')

   <div class="container d-flex justify-content-center mt-100">
        <div class="row">
            <div class="col-md-6">
                <div class="card2">
                    <div class="card-body text-center">
                        <form action="{{route('score.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="video_id" value="{{$video->id}}">
                        <h4 class="mt-1">Rate us</h4>
                        <fieldset class="rating"> <input type="radio" required id="star5" name="rating" value="10" /><label class="full" for="star5" title="Awesome - 5 stars"></label> <input type="radio" id="star4half" name="rating" value="9" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label> <input type="radio" id="star4" name="rating" value="8" /><label class="full" for="star4" title="Pretty good - 4 stars"></label> <input type="radio" id="star3half" name="rating" value="7" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label> <input type="radio" id="star3" name="rating" value="6" /><label class="full" for="star3" title="Meh - 3 stars"></label> <input type="radio" id="star2half" name="rating" value="5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label> <input type="radio" id="star2" name="rating" value="4" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> <input type="radio" id="star1half" name="rating" value="3" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label> <input type="radio" id="star1" name="rating" value="2" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> <input type="radio" id="starhalf" name="rating" value="1" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label> <input type="radio" class="reset-option" name="rating" value="reset" /> </fieldset>
                            <input type="submit" class="btn btn-outline-success" value="Rate">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Include the above in your HEAD tag ---------->


@endsection
@section('footer')
    @include('layouts.footer')
@endsection
