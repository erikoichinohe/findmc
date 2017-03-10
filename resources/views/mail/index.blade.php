<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MC・司会をお探しならフリーランスMCのマッチングサイト『findMC』</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    
    <body>
<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">MCへのご依頼</div>
            <div class="panel-body">

                
{!! Form::open(['route' => 'sendmail.post']) !!}

<div class="form-group">
    {!! Form::label('date', 'ご希望の日時(拘束時間、本番時間などできるだけ詳しくお書きください）') !!}
    {!! Form::text('date',null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('naiyou', 'オファーの詳細') !!}
    {!! Form::textarea('naiyou', null, ['size' => '50x10','class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('option', '事前打ち合わせオプション') !!}
    {!! Form::radio('option', 'yes', false, array('id' => 'yes')) !!} {!! Form::label('yes', '希望する') !!}
    {!! Form::radio('option', 'no', true, array('id' => 'no')) !!} {!! Form::label('no', '希望しない') !!}
</div>

<div class="form-group">
    {!! Form::label('optiondate', '打ち合わせご希望の場合の希望日時') !!}  
    {!! Form::text('optiondate1',null,['class' => 'form-control','placeholder' => '第一希望']) !!}<br>
    {!! Form::text('optiondate2',null,['class' => 'form-control','placeholder' => '第二希望']) !!}<br>
    {!! Form::text('optiondate3',null,['class' => 'form-control','placeholder' => '第三希望']) !!}
</div>

<div class="form-group">
    {!! Form::label('option2', '台本作成オプション') !!}
    {!! Form::radio('option2', 'yes', false, array('id' => 'yes')) !!} {!! Form::label('yes', '希望する') !!}
    {!! Form::radio('option2', 'no', true, array('id' => 'yes')) !!} {!! Form::label('no', '希望しない') !!}

</div>

<div>
    <?php $user = Auth::user()->get(); ?>
   {!! Form::hidden('name', $user->name) !!} 
   {!! Form::hidden('email', $user->email) !!} 
   {!! Form::hidden('mcid', $mc->id) !!} 
   {!! Form::hidden('mcname', $mc->name) !!} 
   {!! Form::hidden('mcemail', $mc->email) !!} 
   
</div>

<div class="text-right">

    {!! Form::submit("送信", ['class' => 'btn btn-success']) !!}
</div>

{!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>