<style>
    .btn.focus, .btn:focus {
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0);
    }
</style>
@foreach($news_rowabc as $i)
    <div style="padding-top: 0.5em;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5>{!! $i->title !!}
                    <span style="float: right;">
                        <button type="button" class="btn" data-toggle="collapse" data-target="#demo{!! $i->id !!}">
                        <img src="/2019/profile/arrow-down.svg" alt="" style="height: 1em">
                    </button>
                    </span>
                    </h5>
                    <p style="font-size: 11px;margin-bottom: 0px">One liner will go here One liner will go here</p>
                </div>
                <div class="col-4" style="background-image: url('{!! $i->image !!}');background-size: cover;background-position: center;border-radius: 20px">                </div>
            </div>
        <div class="row" style="display: flex;padding: 0% 5%;">
            <div id="demo{!! $i->id !!}" class="collapse" style="font-size: 11px;padding: 4%">{!! $i->description !!}</div>

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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
