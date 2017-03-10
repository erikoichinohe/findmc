@extends('layouts.app')

@section('content')

    <h1>登録MC一覧</h1>
    
    @include('mcs.mcs', ['mcs' => $mcs])
    {!! $mcs->render() !!}
    
@endsection