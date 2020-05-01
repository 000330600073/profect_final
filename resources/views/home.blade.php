@extends('video.yaga')
<style>

    .form-control{

        width: 80%;
        height: 80px;
        padding: 10px 15px;
        border-radius: 10px;
    }
    .col-md-5{
        padding: 10px;

    }
    .well span{
        margin: 6px;

    }
</style>
@section('content')
    <div class="container1" style="color: white ">
        <div class="row" style="text-align: center">
            <div class="col-md-5 ">

                    <div class="panel-heading" style="font-size: 2em">Comment</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form id="comment-form" method="post" action="{{ route('comments.store') }}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" >
                            <div class="row" style="padding: 10px; ">
                                <div class="form-group">
                                    <textarea class="form-control" name="comment" placeholder="Write something from your heart..!"></textarea>
                                </div>
                            </div>
                            <div class="row" >
                                <div class="form-group">
                                    <input type="submit" value="Send" class="btn btn-primary " style="width: 20%; padding: 4px 10px; border-radius: 5px " name="submit">
                                </div>
                            </div>
                        </form>

                    </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-5 ">
                <div class="panel panel-default">


                    <div class="panel-body comment-container" >
                        @if(session('successMsg'))
                            <div class="alert alert-success" role="alert" style="text-align: center">
                                {{session('successMsg')}}
                            </div>
                        @endif

                        @foreach($comments   as $comment)
                            <div class="well">
                                <span style="font-size:1.6em "><i><b> {{ $comment->name }} </b></i>&nbsp;</span>&nbsp;<br>
<div class="comenty" style="background: orange; padding: 10px; margin: 5px; color: black; border-radius:3px;border: 1px solid white;    " >
                                <span style="font-size:1.3em "> {{ $comment->comment }} </span>
</div>
                               <!-- <span> {{ $comment->user_id }} </span>-->

                                   <!-- <a style="cursor: pointer;" cid="{{ $comment->id }}" name_a="{{ Auth::user()->name }}" token="{{ csrf_token() }}" class="reply">Reply</a>&nbsp;-->
                                    <form method="POST" id="delete-form- {{ $comment->id }}" action="{{ route('comments.delete',  [$comment->id, $comment->user_id] ) }}" style="display: none">
                                        {{csrf_field()}}
                                        {{method_field('delete')}}
                                    </form>

                                    <button onclick="if (confirm('Are you sure to delete this field')){
                                        event.preventDefault();
                                        document.getElementById('delete-form- {{  $comment->id}}').submit();
                                        }else {
                                        event.preventDefault();
                                        }
                                        " style="margin: 8px; float:right;"><i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                <br><br>



                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


