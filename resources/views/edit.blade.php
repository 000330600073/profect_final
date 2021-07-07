@extends('layouts.main')
<style>

form{
    padding: 10px;


}
label, .form-control, .btn{
    margin:5px;

}
input{
    border-radius: 5px;
    padding: 5px;
}
body {

         background-size: 90% 100% ;
         background-repeat: no-repeat;
         background-position: 50% 0;
         background-image: url('/test/img/300.png');
         background-color: black;
         background-attachment: fixed;

     }


</style>
@section('insides')
    <div class="container mt-2"  style="  align: center">

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>
            @endforeach
        @endif

        <div class="alert alert-dark" role="alert" style="text-align: center">
            Edit Users
        </div>
        <form action="{{route('update', $users->id)}}" method="POST">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="exampleInputText">Name</label>
                <br>
                <input class="form-control" type="text" value="{{$users->name}}" placeholder="name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <br>
                <input type="email" class="form-control" value="{{$users->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>

            <input type="submit" class="btn btn-primary" value="Update data">

        </form>
    </div>
@endsection
