@foreach($news_rowabc as $i)
    <div style="padding-top: 0.5em;">
        <a href="{!! $i->link !!}" style="color: black!important;text-decoration: none;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5>{!! $i->title !!}</h5>
                    <p style="font-size: 11px">{!! $i->description !!}</p>
                </div>
                <div class="col-4" style="background-image: url('{!! $i->image !!}');background-size: cover;background-position: center;border-radius: 20px">
                </div>
            </div>
        </a>
        <div class="row" style="display: flex;padding: 0% 5%;">
            <div class="col-8">
                <p style="font-size: 10px">{!! $i->time  !!}</p>
            </div>
            <div class="col-4" style="text-align: right;">
                ....
            </div>
        </div>
        <hr style="margin: 0; width: 90%; margin-left: 5%">
    </div>

@endforeach
