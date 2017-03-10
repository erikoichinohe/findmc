@if (Auth::user()->check()) 

    @if (Auth::user()->get()->already_liked($mc->id))
        {!! Form::open(['route' => ['user.unlike', $mc->id], 'method' => 'delete']) !!}
            {!! Form::submit('お気に入り解除', ['class' => "btn btn-warning"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['user.like', $mc->id]]) !!}
            {!! Form::submit('お気に入りに登録', ['class' => "btn btn-primary"]) !!}
        {!! Form::close() !!}
    @endif
@endif