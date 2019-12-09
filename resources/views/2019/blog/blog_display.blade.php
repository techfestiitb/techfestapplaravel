<!DOCTYPE html>
<html>
<head></head>
<body>
@include('layouts.preloader')
@include('2019.header.header')
@foreach($blog_row as $blog)
    <div style="padding-top: 0.5em;">
        <div class="row" style="display: flex;padding: 0% 5%;">
            <div class="col-8">
                <p style="font-size: 10px">{!! $news_row->time  !!}</p>
            </div>
            <div class="col-4" style="text-align: right;">
                ....
            </div>
        </div>
        <a href="{!! $blog->user_id !!}" style="color: black!important;text-decoration: none;">
            <div class="row" style="display: flex;padding: 0% 5%;height: 25vw;">
                <div class="col-8" style="    overflow: scroll;height: 100%;">
                    <h5>{!! $news_row->title !!}</h5>
                    <p style="font-size: 11px">{!! $blog->description !!}</p>
                </div>
                <div class="col-4" style="background-image: url('{!! $news_row->image !!}');background-size: cover;background-position: center;border-radius: 20px">
                </div>
            </div>
        </a>

        <hr style="margin: 0; width: 90%; margin-left: 5%">
    </div>

@endforeach
</body>
</html>

</html>