@extends('layouts.header')
@section('content')
    <section class="py-5 text-center container">
        <div class="col-lg-12">

            <h1 class="my-4">Users edit</h1>
            <form action="{{route('user.update',$user->id)}}" method="POST">
                @csrf
                @method('PUT')


                Name
                <br/>
                <input type="text" name="name" value="{{$user->name}}" class="form form-control">

                Email
                <br/>
                <input type="text" name="email" value="{{$user->email}}" class="form form-control">

                <br/>
                <label for="role_id">Role_id:</label>

                <select class="form form-control" name="role_id" id="role_id">
                    @if($user->role_id == 1)
                        <option value="1">Guest</option>
                        <option value="2">User</option>
                        <option value="3">Loader</option>
                        <option value="4">Admin</option>
                    @endif
                        @if($user->role_id == 2)
                            <option value="2">User</option>
                            <option value="1">Guest</option>
                            <option value="3">Loader</option>
                            <option value="4">Admin</option>
                        @endif
                        @if($user->role_id == 3)
                            <option value="3">Loader</option>
                            <option value="1">Guest</option>
                            <option value="2">User</option>
                            <option value="4">Admin</option>
                        @endif
                        @if($user->role_id == 4)
                            <option value="4">Admin</option>
                            <option value="1">Guest</option>
                            <option value="2">User</option>
                            <option value="3">Loader</option>
                        @endif
                </select>

                <br/>
                <input type="submit" class="btn btn-primary" value="Save">
                <br/>
                <br/>
            </form>
            <br/>
        </div>
    </section>

@endsection
@section('footer')
    @include('layouts.footer')
@endsection
