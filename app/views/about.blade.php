@extends('layouts.master')

@section('title')
About Us

@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">
    <li>
        <img class="BIg" src="img/Lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Warthog.gif" alt="warthog" />
        <div class="orbit-caption">
            The Warthog
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Bull.gif" alt="bull" />
        <div class="orbit-caption">
            The Bull
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Bee.gif" alt="bee" />
        <div class="orbit-caption">
            The Bee
        </div>
    </li>
</ul>
<br>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="active AboutNav"><a href="index.php/about">About Us</a></dd>
        <dd class="AboutNav"><a href="index.php/family">The Family</a></dd>
        <dd class="AboutNav"><a href="index.php/charities">Charities</a></dd>
    </dl>
</div>

<div class="large-10 medium-10 small-12 columns">
<h2>About Us</h2>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>What we do</h3>
<p>This is the about page</p>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>Our Mission</h3>
    <p>This is the about page</p>
</div>

@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop