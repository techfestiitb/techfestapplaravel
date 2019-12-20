@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Bet on Team') }}</div>

                    <div class="card-body">



            <div class="col-md-6">
                <div class="col-md-6 offset-md-4">
                    <button onclick="bet()" type="submit" class="btn btn-primary">
                        {{ __('Taanaji') }}
                    </button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="col-md-6 offset-md-4">
                    <button onclick="bet()" type="submit" class="btn btn-primary">
                        {{ __('Bose') }}
                    </button>
                </div>
                <p id="demo" style="color: deeppink" size="larger"></p>
            </div>

                        <script>
                            function bet() {
                                var txt;
                                var amount = prompt("Please enter the amount of XPS you want to bet:\n (You have " + {!! $xps_user->xps !!} +" remaining)", " ");
                                if (amount == null || amount == " ") {
                                    txt = "Enter Valid Amount";
                                }
                                else if (amount > 0.9*{!! $xps_user->xps !!} && amount <{!! $xps_user->xps !!}  ) {
                                    txt = "Sorry but you can't spend more than 90% of your XPS ";
                                }
                                else if (amount < 0.9*{!! $xps_user->xps !!} ) {
                                    txt = "Hey " + "{{$user_row->name}}" + "! You are playing for " + amount + "XPS";
                                }
                                {{--if (amount > {{ $user_row->xps }}){--}}
                                {{--    txt = "Sorry! " + {{$user_row->name}} + " , Your balance is less than your betting amount.";--}}
                                {{--}--}}
                                else{
                                    txt = "Reload your page!";
                                }
                                document.getElementById("demo").innerHTML = txt;
                            }
                        </script>
        </div></div></div></div>
    </div>
    
    <div>
        <form action="/robowars/betting/bet/post" method="post">
            @csrf
            <input type="number" name="amount" max="{!! $xps_user->xps !!}" min="1">
            <select name="bot_name">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
            </select>
            <input type="submit">
        </form>
    </div>