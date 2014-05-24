@extends('layouts.master')

@section('title')
Charities
@stop

@section('content')
<ul class="example-orbit" data-orbit>
    <li>
        <img class="slide" src="img/slideshow/elephant.5.jpg" alt="elephantInAfrica" />
        <div class="orbit-caption">
            The Elephants of Africa.
        </div>
    </li>
    <li class="active">
        <img class="slide" src="img/slideshow/manta!!!3.jpg" alt="manta" />
        <div class="orbit-caption">
            The Manta in our seas.
        </div>
    </li>
    <li>
        <img class="slide" src="img/slideshow/DIVING2.jpg" alt="OurSea" />
        <div class="orbit-caption">
            Our ocean corals.
        </div>
    </li>

</ul>
<div class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="AboutNav"><a href="index.php/about">About Us</a></dd>
        <dd class="AboutNav"><a href="index.php/family">The Family</a></dd>
        <dd class="active AboutNav"><a href="index.php/charities">Charities</a></dd>
    </dl>
</div>
<h2>Charities</h2>
<div class="columns panel">
<div class="large-4 medium-4 columns">
    <img href="#" src="img/orrangutan.jpg" alt="orrangutan" />
</div>
<div class="large-8 medium-8 columns">
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