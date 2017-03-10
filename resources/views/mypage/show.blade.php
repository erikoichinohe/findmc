@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$mc->name}} 様 マイページ
                <small>{{$mc->prefecture}}</small>
            </h1>
        </div>
    </div>
    
    
    
    <div class="row">
        <h3>あなたのページはこのように表示されています。</h3>
        
        <div class="col-md-4">
            <p><img class="img-responsive img-thumbnail" src={{ $photo }} alt=""></p>
            @include('photos.create')
            
        </div>
        
        <div class="col-md-8">
            <h3>Profile</h3>
        
        <div class="table-responsive">
            <table class="table table-striped">
            <tr>
                <th class="text-center">自己PR</th>
            </tr>
            <tr>
                <td class="text-center">{!! nl2br(e( $mc->pr )) !!}</td>
            </tr>
            <tr>
                <th class="text-center">経歴</th>
            </tr>
            <tr>
                <td class="text-center">{!! nl2br(e( $mc->keireki )) !!}</td>
            </tr>
            <tr>
                <th class="text-center">得意分野</th>
            </tr>
            <tr>
                <td class="text-center">{!! nl2br(e( $mc->bunya1 )) !!}</td>
            </tr>
            <tr>
                <th class="text-center">金額（拘束時間5時間での基準最低価格）</th>
            </tr>
            <tr>
                <td class="text-center">
                    <?php $price = $mc->price; ?>
                    
                     @if($price==="typeA")
                     20,000円
                     @elseif($price==="typeB")
                     35,000円
                     @elseif($price==="typeC")
                     50,000円
                     @else
                     お問い合わせください
                     @endif
                </td>
            </tr>
            </table>
        </div>
        </div>
    </div>
@endsection