<style>
    .crossRotate{
        transform: rotate(0deg);
        transition: transform 0.4s ease;
    }

    .crossRotate.open{
        transform: rotate(180deg);
        transition: transform 0.4s ease;
    }
    .btn.focus, .btn:focus {
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0);
    }
</style>
@foreach($news_rowabc as $i)
    <div class="lazy_box" style="padding-top: 0.5em;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5>{!! $i->title !!}
                    <span style="float: right;">
                        <button type="button" class="btn" data-toggle="collapse" data-target="#demo{!! $i->id !!}">
                            <div id="container3{!! $i->id !!}">
                                <img id="icon{!! $i->id !!}" src="https://image.flaticon.com/icons/png/512/120/120890.png" class="crossRotate" alt="" style="height: 1em">
                            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        (function(document){
            var div = document.getElementById('container3{!! $i->id !!}');
            var icon = document.getElementById('icon{!! $i->id !!}');
            var open = false;

            div.addEventListener('click', function(){
                if(open){
                    icon.className = 'crossRotate';
                } else{
                    icon.className = 'crossRotate open';
                }

                open = !open;
            });
        })(document);
    </script>
@endforeach

