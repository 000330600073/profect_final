
@extends('layouts.main')
@section('insides')

    <style>
        body {

            background-size: 90% 100% ;
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-image: url('/test/img/300.png');
            background-color: black;
            background-attachment: fixed;

        }
        table {
            border: 2px solid white;
            color:black;

            width: 100%;
        }
        th {

            height: 30px;
        }
td{
    background: grey;
    text-align: center;
}
    </style>
    @if(session('successMsg'))
        <div class="alert alert-success" role="alert" style="text-align: center">
            {{session('successMsg')}}
        </div>
    @endif

        <table class="table ">
            <thead>
            <tr style="background:white;">
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr style="background: lightgrey;">
                    <th style="background: white" scope="row" >{{$user->id}}</th>
                    <th>{{$user->name}}</th>
                    <th>{{$user->email}}</th>

                    <td><a href=" {{ route('edit', $user->id) }}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>

                        or

                        <form method="POST" id="delete-form- {{ $user->id }}" action="{{ route('delete', $user->id) }}" style="display: none">
                            {{csrf_field()}}
                            {{method_field('delete')}}
                        </form>

                        <button onclick="if (confirm('Are you sure to delete this field')){
                            event.preventDefault();
                            document.getElementById('delete-form- {{ $user->id }}').submit();
                            }else {
                            event.preventDefault();
                            }
                            "><i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                </tr>
            @endforeach

            </tbody>
        </table>


@endsection

