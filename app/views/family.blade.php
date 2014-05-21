@extends('layouts.master')

@section('title')
Family
@stop

@section('content')
<ul class="example-orbit" data-orbit>
    <li>
        <img src="img/slideshow/rhino.jpg" alt="rhino" />
        <div class="orbit-caption">
            blar
        </div>
    </li>
    <li class="active">
        <img src="img/slideshow/rhino.jpg" alt="rhino" />
        <div class="orbit-caption">
            Caption Two.
        </div>
    </li>
    <li>
        <img src="img/slideshow/rhino.jpg" alt="rhino" />
        <div class="orbit-caption">
            Caption Three.
        </div>
    </li>
    <li>
        <img src="img/slideshow/rhino.jpg" alt="rhino" />
        <div class="orbit-caption">
            Caption Three.
        </div>
    </li>
</ul>
<div class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd><a href="index.php/about">About Us</a></dd>
        <dd class="active"><a href="index.php/family">The Family</a></dd>
        <dd><a href="index.php/charities">Charities</a></dd>
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