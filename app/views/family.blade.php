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

    <div class="columns panel">
    <div class="row">

    <div class="large-4 medium-4 columns">
        <img src="img/family1.jpg" alt="family" />
        <br>
    </div>

    <div class="large-8 medium-8 columns">
        <h3>Ish - Artist</h3>
        <p>Ish Campbell is a keen ecologist by profession who
            has enjoyed wildlife experience all over the world since a young teenager,
            from coral reef conservation in Malaysia to elephant research in Botswana.
            She has been in love with Africa since she was a child and it was when in
            Botswana that she found inspiration to create African art of her own.</div>
    </div>
</div>
    </div>


<div class="columns panel">
<div class="columns panel">
    <div class="row">
    <div class="large-4 medium-4 columns">
        <img src="img/family1.jpg" alt="family" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Guy - Graphic Designer &amp; Marketeer</h3>
        <p>Guy Campbell - </p>
    </div>
        </div>
</div>
</div>

<div class="columns panel">
<div class="columns panel">
        <div class="row">
    <div class="large-4 medium-4 columns">
        <img src="img/family1.jpg" alt="family" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Hugh - Finance Manager</h3>
        <p>Hugh is our very own mathematics genie who looks after and takes care of all ur finances.
            He is the one that makes sure our money goes to all the right places in the development and production of our products. </p>
    </div>
</div>
 </div>

</div>
<div class="columns panel">
<div class="columns panel">
<div class="row">
    <div class="large-4 medium-4 columns">
        <img src="img/family1.jpg" alt="family" />
    </div>
    <div class="large-8 medium-8 columns">
        <h3>Isla - Social Media Manager</h3>
        <p>Our very own Socialite, studying for a career in interior
            design, Isla, brings a flair of creativity to the table.
            She is Responsible of spreading the word about Bugz &amp; Beastiez.</p></div>
</div>
</div>
    </div>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop