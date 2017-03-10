<div class="panel panel-default">
    <div class="panel-heading">写真を変更する</div>
    <div class="panel-body">

            {!! Form::open(['route' => 'photos.store', 'files' => true]) !!}

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif



            {!! Form::file('photo', null) !!}

            {!! Form::submit('アップロード',['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

    </div>
</div>

