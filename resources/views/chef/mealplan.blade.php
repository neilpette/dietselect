@extends('layouts.app')
@section('head')
    <title>Meal Planning - Diet Select PH | Treating yourself the right way!</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="/css/chef/app.css">
    <script src="/js/chef/app.js" defer></script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <h2 class="center white-text">Diet Meal Planning</h2>
            <span class="center full-width white-text" style="font-size: 1.5em">We're in the mood for improving some diets!</span>
            <div class="card papaya-whip">
                <div class="card-content">
                    <h4 class="mustard-text">Meal Plans:</h4>
                    <div class="row">
                        <div class="col s12 m6 l4">
                            <div class="card sticky-action hoverable">
                                <div class="card-image waves-effect waves-block waves-asparagus">
                                    <img class="img-responsive activator" src="/img/diet-meal-1.jpg">
                                </div>
                                <div class="card-content">
                                    <span class="card-title activator grey-text text-darken-4 no-pad-bot center">The Holiday Belly Buster Plan</span>
                                </div>
                                <div class="card-reveal center lime lighten-4">
                                    <span class="card-title"><i class="material-icons right">close</i></span>
                                    <a class="meal-plan-option-btn" href="#"><span class="fa fa-pencil"></span></a>
                                    <a class="meal-plan-option-btn" href="#"><span class="fa fa-trash"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card sticky-action hoverable">
                                <div class="card-image waves-effect waves-block waves-asparagus">
                                    <img class="img-responsive activator" src="/img/diet-meal-2.jpg">
                                </div>
                                <div class="card-content no-pad-top">
                                    <h2 class="card-title activator grey-text text-darken-4 no-pad-bot center">Summer Bod Here I Come Plan</h2>
                                </div>
                                <div class="card-reveal center lime lighten-4">
                                    <span class="card-title"><i class="material-icons right">close</i></span>
                                    <a class="meal-plan-option-btn" href="#"><span class="fa fa-pencil"></span></a>
                                    <a class="meal-plan-option-btn" href="#"><span class="fa fa-trash"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6 l4">
                            <div class="card sticky-action hoverable">
                                <div class="card-image waves-effect waves-block waves-asparagus">
                                    <span class="fa fa-plus-circle light-green-text" style="display: block; font-size: 8em; margin: 0.15em auto; width: 100%; text-align: center;"></span>
                                </div>
                                <div class="card-content no-pad-top">
                                    <h2 class="card-title activator grey-text center text-darken-4 no-pad-bot">Add New Meal Plan</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-action">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection