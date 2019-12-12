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
                <p id="demo" style="color: black" size="larger"></p>
            </div>

                        <script>
                            function bet() {
                                var txt;
                                var amount = prompt("Please enter the amount you want to bet:", "xxxx XPS");
                                if (amount == null || amount == "") {
                                    txt = "Enter Valid Amount";
                                }
                                if (amount > 0.9* 5555 ) {
                                    txt = "Sorry but you can't spend more than 90% of your XPS ";
                                }
                                else {
                                    txt = "Hey " + "dee" + "! You are playing for " + amount + "XPS";
                                }
                                document.getElementById("demo").innerHTML = txt;
                            }
                        </script>
        </div></div></div></div>