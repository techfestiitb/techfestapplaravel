<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-81222017-1');
</script>
<style>
    .navbar-light .navbar-nav .nav-link {
        color: rgba(0,0,0,1);
</style>
<div class="row" style="position: sticky;top: 0;padding: 1%;width: 100%">
    <div id="app" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="col-8" style="text-align: center;">
                    <img src="http://techfest.org/2019/tf_date_black.png" alt="" style="max-height: 4vh">
                </div>
        </nav>
    </div>
</div>

<div class="row" style="position: fixed;top: 0;background-color: white;z-index: 100;padding: 1%;filter: invert(1);margin-right: 0px;margin-left: 0px;width: 100%">
    <div id="app" style="width: 100%">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container" style="width: 100%;">
                <div class="col-1" style="text-align: center;padding-left: 0px;padding-right: 0px;">
                    @if(Request::url() != "http://app.techfest.org/schedule")
                        <button onclick="goBack()" style="border-width: 0px;background: transparent;">
                            <img src="/2019/profile/left-arrow.png" alt="" style="max-height: 3.5vh">
                        </button>
                        @endif
                </div>
                <div class="col-8" style="text-align: center;">
                    <img src="http://techfest.org/2019/tf_date_black.png" alt="" style="max-height: 4vh">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        {{--                            <li class="nav-item"><a class="nav-link" href="{{ route('media') }}">Media</a></li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('initiatives') }}">Initiatives</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('summit') }}">Summit</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('twmun') }}">TWMUN</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('lectures') }}">Lectures</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('exhibitions') }}">Exhibitions</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('workshops') }}">Workshops</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('competitions') }}">Competition</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('esports') }}">Esports</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('ift') }}">IFT</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('robowars') }}">Robowars</a></li>
{{--                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Technoholix</a></li>--}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('ozone') }}">Ozone</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

@include('layouts.preloader')

<script>
    function goBack() {
        window.history.go(-1);
    }
</script>
<script src="{{ asset('js/app.js') }}" defer></script>
