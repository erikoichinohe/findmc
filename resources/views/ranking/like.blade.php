@extends('layouts.app')

@section('content')
    <h1>お気に入りランキング</h1>
    @include('mcs.mcs', ['mcs', $mcs])
@endsection