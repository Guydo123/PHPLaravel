@extends('layouts.master')

@section('title')
Family
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
<div class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="AboutNav"><a href="index.php/about">About Us</a></dd>
        <dd class="active AboutNav"><a href="index.php/family">The Family</a></dd>
        <dd class="AboutNav"><a href="index.php/charities">Charities</a></dd>
    </dl>
</div>
<h2>The Family</h2>
<div class="columns panel">
<p>Bugz and Beastiez is a family business set up by four siblings yada yada</p>
    <div class="large-4 medium-4 columns">
        <img href="#" src="#" alt="#" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Ish</h3>
        <p>This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Servicesv
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services</p>
    </div>
    <div class="large-4 medium-4 columns">
        <img href="#" src="#" alt="#" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Guy</h3>
        <p>This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Servicesv
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services</p>
    </div><div class="large-4 medium-4 columns">
        <img href="#" src="#" alt="#" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Hugh</h3>
        <p>This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Servicesv
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services</p>
    </div>
    <div class="large-4 medium-4 columns">
        <img href="#" src="#" alt="#" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Isla</h3>
        <p>This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Servicesv
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services
            This is the ServicesThis is the ServicesThis is the ServicesThis is the ServicesThis is the Services</p>
    </div>
</div>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop