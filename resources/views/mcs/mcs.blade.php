@if ($mcs)
    <div class="row">
        @foreach ($mcs as $mc)
        
            <div class="col-md-3 portfolio-item">
                <a href="#">
                    @if (file_exists(public_path() . '/images/mcs/' . $mc->id . '/mcimage01s.jpg'))
                    <img class="img-circle img-responsive img-center" src="/images/mcs/{{$mc->id}}/mcimage01s.jpg" alt="">
                    @else
                    <img class="img-circle img-responsive img-center" src="/images/noimages.png" alt="">
                    @endif
                </a>
                <h3>
                    {!! link_to_route('mcs.show', $mc->name, ['id' => $mc->id]) !!}
                </h3>
                <p>（得意分野）</p>
                <p class="bunya">{!! nl2br(e( $mc->bunya1 )) !!}</p>
                @if (isset($mc->count))
                    <div class="ranking">
                        <p><span class="badge">{{ $mc->count }}</span>人にお気に入りされています</p>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
@endif
        

