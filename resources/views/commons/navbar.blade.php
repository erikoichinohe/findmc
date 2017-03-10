<header>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-
avbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-left" href="/"><img src="{{ asset("images/logo.png") }}" alt="findMC"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::user()->check())
                        <li>
                            <a href="{{ route('mcs.index') }}">
                                <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
                                MC一覧
                              </a>
                        </li>
                        <li>
                            <a href="{{ route('ranking.like') }}">
                                <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                                MCランキング
                              </a>
                        </li>
                        
                        <li class="dropdown">
                            <?php $user = Auth::user()->get() ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="glyphicon glyphicon glyphicon-user"></span>
                                {{ $user->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="/users/{{$user->id}}">マイページ</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('userlogout.get') }}">ログアウト</a>
                                </li>
                            </ul>
                        </li>
                    
                    @elseif (Auth::mc()->check())
                    
                        <li class="dropdown">
                            <?php $mc = Auth::mc()->get() ?>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                               <span class="glyphicon glyphicon glyphicon-user"></span>
                                {{ $mc->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ route('mypage.show', ['id' => $mc->id]) }}">マイページ</a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('mclogout.get') }}">ログアウト</a>
                                </li>
                            </ul>
                        </li>
                    
                    @else
                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            新規登録
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('usersignup.get') }}">依頼者として登録</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('mcsignup.get') }}">MCとして登録</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            ログイン
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('userlogin.get') }}">依頼者としてログイン</a>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="{{ route('mclogin.get') }}">MCとしてログイン</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>