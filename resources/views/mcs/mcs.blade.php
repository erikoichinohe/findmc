@if ($mcs)
    <div class="row">
        @foreach ($mcs as $key => $mc)
        
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    @if (file_exists(public_path() . '/images/mcs/' . $mc->id . '/mcimage01s.jpg'))
                    <img class="img-circle img-responsive img-center" src="/images/mcs/{{$mc->id}}/mcimage01s.jpg" alt="">
                    @else
                    <img class="img-circle img-responsive img-center" src="/images/noimages.png" alt="">
                    @endif
                </a>
                <h3>
                    <b>{{ $key+1 }}位</b>
                    {!! link_to_route('mcs.show', $mc->name, ['id' => $mc->id]) !!}
                </h3>
                <p>（得意分野）</p>
                <p class="bunya">{!! nl2br(e( $mc->bunya1 )) !!}</p>
                @if (isset($mc->count))
                    <div class="ranking">
                        <p><span class="badge">{{ $mc->count }}人からお気に入りされています</span></p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endif
        

