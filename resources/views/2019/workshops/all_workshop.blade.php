<br>
<div class="row">
    @foreach($all_workshops_info as $workshop)
        <a href="/workshops/{{$workshop->link}}">
            <div class="col-6 workshop_div" style="padding-bottom: 15px;display: inline-table">
                <div class="ft-recipe" >
                    <div class="ft-recipe__thumb">
                        <img src="http://techfest.org{{$workshop->image}}" alt="{{$workshop->name}} Techfest Workshop"/>
                    </div>
                    <div class="ft-recipe__content" style="min-height: 4em;">
                        <h4 style="text-align: center;margin: 3px 0px;font-size: 1em;">{{$workshop->name}}</h4>
{{--                        <p class="description">{!! $workshop->description !!}</p>--}}
                        <footer class="content__footer">
                            <a style="width: 100%" href="/workshops/{{$workshop->link}}">{{$workshop->registration_text}}</a>
                        </footer>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
</div>
