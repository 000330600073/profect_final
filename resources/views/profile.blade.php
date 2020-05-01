
@extends('layouts.header2')


@section('content')
    <style>
        body {

            background-size: 90% 100% ;
            background-repeat: no-repeat;
            background-position: 50% 80%    ;
            background-image: url('/test/img/land.jpg');

            background-color: black;
            background-attachment: fixed;

        }

    </style>
    <br> <br> <br>
    <div class="wrapper" >
        <div class="row" style="background:  #2b2b2b; background:rgba(0,0,0,0.82)!important; height: 210px;  color:white; border-radius: 15px">
                <img src="/uploads/avatars/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:40%; margin-right:20px;padding:20px ">
                <h1 style="padding: 25px 0 15px">{{ $user->name }}'s Profile</h1>
                <form enctype="multipart/form-data" action="/profile" method="POST">
                    <label style="border-radius: 10px">Update Profile Image</label><br><br>

                    <input type="file" name="avatar">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <input type="submit"  value="Upload photo" style="width: 20%; padding: 4px 10px; border-radius: 5px;  " class="pull-right btn btn-sm btn-primary">
                </form>
                @if(session('successMsg'))
                    <div class="alert alert-success" role="alert" style="text-align: center">
                        {{session('successMsg')}}
                    </div>
                @endif
            <br>
                <a class="btn btn-link" style="font-size: 1.5em" href="{{ route('password.change') }}">
                    Change Password
                </a>

            </div>
        </div>

@endsection
