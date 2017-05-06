@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$thread->title}}</div>

                    <div class="panel-body">
                        <article>
                            <div>{{$thread->body}}</div>
                        </article>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @foreach($thread->replies as $reply)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="#">{{$reply->owner->name}}</a>
                            {{$reply->created_at->diffForHumans()}}
                            <strong>said ...</strong>
                        </div>
                        <div class="panel-body">
                                <div>{{$reply->body}}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
