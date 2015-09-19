<div class="panel @if($del = !is_null($comment->delted_at)) panel-danger @else panel-default @endif">
    <div class="panel-body">
        @simplemd($comment->content)
    </div>
    <div class="panel-footer">by <a href="/user/{{$comment->user->username}}">{{$comment->user->username}}</a> <small>{{$comment->created_at->diffForHumans()}}</small>
        @if($mod)
            <a data-confirm="Do you really want to delete that comment?" class="btn btn-danger" href="{{url('comment/' . $comment->id . '/delete')}}">Delete</a>
            @if($del)
                <a href="{{url('comment/' . $comment->id . '/restore')}}" class="btn btn-success">Restore</a>
            @endif
        @endif
    </div>
</div>