@extends('layouts.master')

@section('title')
welcome to Bugz &amp; Beastiez
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:true;">
    <li>
        <img class="BIg" src="img/Lightbox/Lizard.gif" alt="Turtles" />
        <div class="orbit-caption">
           The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Cheetah.gif" alt="Cheetah" />
        <div class="orbit-caption">
            The Cheetah
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Horse.gif" alt="Horse" />
        <div class="orbit-caption">
            The Horse
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Bug.gif" alt="Bug" />
        <div class="orbit-caption">
            The Bug
        </div>
    </li>
</ul>


<h2>Welcome to Bugz and Beastiez</h2>
<div class="columns panel">
<div class="large-6 medium-6 columns ">

<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
    when an unknown printer took a galley of type and scrambled it to make a type
    specimen book. It has survived not only five centuries, but also the leap into
    electronic typesetting</p>
</div>

<div class="large-6 medium-6 columns">

    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into
        electronic typesetting</p>

</div>
</div>
<div class="productsHome">
<h3>Products</h3>
    <div class="row">
        <div class="Large-12 medium-12 columns panel">
<div class="large-3 medium-6 columns">
    <a href="index.php/products">
        <h4>Pottery</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            </div>
    </a>
        <p class="caption">Our awesome designs can brighten up your dining with
            our collection of plates, mugs and bowles.</p>

</div>
<div class="large-3 medium-6 columns">
    <a href="index.php/products">
        <h4>For the Kitchen</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            </div>
    </a>
    <p class="caption">Our awesome designs can brighten up your dining with
        our collection of plates, mugs and bowles.</p>

</div>
<div class="large-3 medium-6 columns">
    <a href="index.php/products">
    <h4>For Artists</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
            <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
       </div>
    </a>

    <p class="caption">Our awesome designs can brighten up your dining with
        our collection of plates, mugs and bowles.</p>

</div>

        <div class="large-3 medium-6 columns">
            <a href="index.php/products">
                <h4>Cards & Canvas</h4>
                <div class="cycle-slideshow">
                    <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
                    <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
                    <img class="homeProd" src="img/thumbs/mug2.Gif" alt="Dummy" />
                </div>
            </a>


            <p class="caption">Our awesome designs can brighten up your dining with
                our collection of plates, mugs and bowles.</p>

        </div>

</div>
    </div>
</div>

<div>
<h3>News</h3>
<div class="Large-6 medium-6 columns panel">
    <h4>Welcome</h4>
    <p>This is the home page</p>
</div>
<div class="Large-6 medium-6 columns panel">
    <h4>Welcome</h4>
    <p>This is the home page</p>
</div>
</div>


@stop

@section('footer')
<div class="small-12 columns panel">
@parent
</div>
@stop