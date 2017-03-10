@extends('layouts.app')

@section('content')
<div class="row">
    <h1 class="page-header">
        {{ $user->name }}様のマイページ
    </h1>
</div>

<div class="row">
    <h2 class="page-header">お気に入りに登録したMC</h2>
</div>

 @include('mcs.mcs', ['mcs' => $mcs])


@endsection