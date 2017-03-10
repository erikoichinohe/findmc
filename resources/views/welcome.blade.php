@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>MCがいればそのイベントはもっと良くなる</h1>
                <a href="{{ route('mcs.index') }}" class="btn btn-success btn-lg">MCをさがす</a>
            </div>
        </div>
    </div>
@endsection

@section('content')
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
    <h2 class="page-header">登録MC</h2>
</div>

@include('mcs.mcs', ['mcs' => $mcs])
{!! $mcs->render() !!}

@endsection
