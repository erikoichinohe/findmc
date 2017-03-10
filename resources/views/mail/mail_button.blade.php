{!! Form::open(['route' => ['mail', $mc->id]]) !!}
    {!! Form::submit('このMCに依頼する', ['class' => "btn btn-success"]) !!}
{!! Form::close() !!}