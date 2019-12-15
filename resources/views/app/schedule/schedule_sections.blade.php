<div  style=" margin: 2px;">
    <div class="row">
        <div class="col-2" style="padding: 10px">
            @if($i->type == "1")
                <img src="https://image.flaticon.com/icons/png/512/1940/premium/1940619.png" width="100%" >
            @elseif($i->type == "Exhibitions")
                <img src="https://image.flaticon.com/icons/png/512/870/870443.png" width="100%" >
            @endif

        </div>
        <div class="col-8" style="padding: 0%">
            <h5  style="font-weight: bold;color: black; font-size: 20px ; margin-bottom: 1px ">{!! $i->title !!}</h5>
            <p style="font-size:12px; margin: 1px ">Date : {!! $i->date  !!}  Time : {!! $i->time  !!}</p>
            <p style="font-size:12px; margin: 1px  ">Duration : {!! $i->duration  !!}  Venue : {!! $i->venue  !!}</p>

            <div class="row">
                <div class="col-sm-2" style="display: inline-block;"> <span style="display: inline-block;"><div class="circle" style="width:10px;
                        height:10px;
                        border-radius:50px;
                        font-size:20px;
                        color:#fff;
                        line-height:100px;
                        background: green;"></div></span>
                    <p style="display: inline-block;">{!! $i->type !!} </p>
                </div>
            </div>
        </div>
        <div class="col-2" style="padding: 3%">
            <button type="button" class="btn" data-toggle="collapse" data-target="#demo{!! $i->id !!}">
                <div id="container3{!! $i->id !!}">
                    <img id="icon{!! $i->id !!}" class="crossRotate" src="https://image.flaticon.com/icons/png/512/120/120890.png" width="70%" style="" >
                </div>

            </button>
        </div>
    </div>
    <div id="demo{!! $i->id !!}" class="collapse" style="margin-top: 0px">
        <div class="row">
            <div class="col-2">

            </div>
            <div class="col-10" style=" padding-left: 0% ;padding-right: 5%">
                <p style="color: black">{!! $i->description !!}</p>
            </div>
        </div>
    </div>
</div>

<hr style="margin: 0; width: 90%; margin-left: 5%">
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
