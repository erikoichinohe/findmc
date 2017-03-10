@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-offset-3 col-xs-6">
        <div class="panel panel-default">
            <div class="panel-heading">MCとして新規登録</div>
            <div class="panel-body">
                {!! Form::open(['route' => 'mcsignup.post']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'メールアドレス') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('postalcode', '郵便番号（7桁）') !!} 
                        {!! Form::text('postalcode',old('postalcode'),['class' => 'form-control','placeholder' => '0000000']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('prefecture', '住所') !!} 
                        {!! Form::text('prefecture',old('prefecture'),['class' => 'form-control','placeholder' => '都道府県']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('address1',old('address1'),['class' => 'form-control','placeholder' => '地区町村郡']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('address2',old('address2'),['class' => 'form-control','placeholder' => '町名番地']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::text('address3',old('address3'),['class' => 'form-control','placeholder' => '建物名等']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('phone', '電話番号') !!}
                        {!! Form::text('phone', old('phone'), ['class' => 'form-control']) !!}
                    </div>
                    
                     <div class="form-group">
                        {!! Form::label('pr', '自己PR（改行有効）') !!}
                        {!! Form::textarea('pr', null, ['size' => '50x10','class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('keireki', '主な経歴（改行有効）') !!}
                        {!! Form::textarea('keireki', null, ['size' => '50x10','class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('bunya1', '得意分野（改行有効）') !!}
                        {!! Form::textarea('bunya1', null, ['size' => '50x10','class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('price', '5時間拘束時の基準金額') !!}
                        {!! Form::select('price', [
                           'typeA' => '20,000円',
                           'typeB' => '35,000円',
                           'typeC' => '50,000円'],
                       null, ['class' => 'form-control']) !!}
                    </div>
                    
                    
                


                    <div class="text-right">
                        {!! Form::submit('登録する', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection