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