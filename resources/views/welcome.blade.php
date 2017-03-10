@extends('layouts.app')


@section('content')

<div id="myCarousel" class="carousel slide"　data-ride="carousel">
    
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for Slides -->
    <div class="carousel-inner">
        <div class="item active">
            <!-- Set the first background image using inline CSS below. -->
            <img src="/images/coverphoto01.jpg" alt="">
            <div class="carousel-caption">
                <h2>MCがいればそのイベントはもっと良くなる</h2>
                <a href="{{ route('mcs.index') }}" class="btn btn-success btn-lg">MCをさがす <span class="glyphicon glyphicon-search"></span></a>　
                <a href="{{ route('mclogin.get') }}" class="btn btn-success btn-lg">MCをする <span class="glyphicon glyphicon-volume-up"></a>
            </div>
        </div>
        
        <div class="item">
            <!-- Set the second background image using inline CSS below. -->
            <img src="/images/coverphoto02.jpg" alt="">
            <div class="carousel-caption">
                <h2>経験豊富なMCとあなたをマッチング</h2>
                <a href="{{ route('mcs.index') }}" class="btn btn-success btn-lg">MCをさがす <span class="glyphicon glyphicon-search"></span></a> 
                <a href="{{ route('mclogin.get') }}" class="btn btn-success btn-lg">MCをする <span class="glyphicon glyphicon-volume-up"></a>
            </div>
        </div>
        
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
    </a>

</div>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">MC・司会者をお探しなら「FindMC」</br>
            <small>業界初！MC・司会者とあなたを繋ぐ個人間マッチングサービス</small>
        </h1>
        <p>イベントを主催する。結婚式の予定がある。そんなときイベントを盛り上げ、円滑にすすめるにはMCの存在が必要不可欠です。今まではアナウンサー事務所や代理店を通さないと依頼ができなかったMC。FindMCがあれば、直接取引でより気軽にMCを依頼できるようになりました。経験豊富でプロフェッショナルなフリーランスのMCや司会者たちが、あなたのそのイベントを支えます。</p>
    </div>
</div>

 <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">FindMCの特徴</h2>
            </div>
            
            <div class="col-md-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/top01.jpg" alt="">
                <h3>
                    業界最安値水準
                </h3>
                <p>芸能事務所や広告代理店を通さないから、業界最安値水準でプロのMCに依頼することが可能！</p>
            </div>
            
            <div class="col-md-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/top02.jpg" alt="">
                <h3>
                    どんなご依頼にも応えます
                </h3>
                <p>結婚式・パーティー・イベント・ストリーム放送など、様々なシーンに対応。専門知識が必要な現場でも、対応可能なMCがきっと見つかります。</p>
            </div>
            
            <div class="col-md-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="images/top03.jpg" alt="">
                <h3>
                    初めての依頼でも安心
                </h3>
                <p>事前打ち合わせや台本作成などのオプションも。どんな台本を用意したらいいか分からないなんて心配は無用。はじめてMCを依頼する方でも安心です。</p>
            </div>
</div>

<div class="row">
    <h2 class="page-header">MCランキング</h2>
</div>

@include('mcs.mcs', ['mcs' => $mcs])


@endsection
