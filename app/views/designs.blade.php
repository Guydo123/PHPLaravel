@extends('layouts.master')

@section('title')
Designs
@stop

@section('content')

<h2>Designs</h2>
<h3 class="filterD"><a href="index.php/designs">Africa</a></h3>
<h3 class="filterD"><a href="index.php/designsTwo">Bugz</a></h3>
<h3 class="filterD"><a href="index.php/designsThree">Farm</a></h3>
<h3 class="filterD"><a href="index.php/designsFour">Reptilez</a></h3>
<div class="columns panel">
    <h2>Africa</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/rhino2.jpg" title="The Rhino - Africa Collection.">
            <img src="img/thumbs/rhinothumbnail.jpg" alt="rhino" />
        </a>
        <p>The Rhino</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Spring_Bok.jpg" title="The Spring Bok - Africa Collection.">
            <img src="img/thumbs/Spring_Bokthumbs.gif" alt="SpringBok" />
        </a>
        <p>The Spring Bok</p>
    </div>
    </div>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Hippo-photo-shop.jpg" title="THe Hippo - Africa Collection.">
            <img src="img/thumbs/Hippothumb.gif" alt="Hippo" />
        </a>
        <p>The Hippo</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Cheetah.gif" title="The Cheetah - Africa Collection.">
            <img src="img/thumbs/Cheetahthumb.gif" alt="cheetah" />
        </a>
        <p>The Cheetah</p>
    </div>
        </div>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Ele_Head.gif" title="The Elephant - Africa Collection.">
            <img src="img/thumbs/Ele_thumb.gif" alt="Elephant" />
        </a>
        <p>The Elephant</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Warthog.gif" title="The Warthogs - Africa Collection.">
            <img src="img/thumbs/Warthogthumbs.gif" alt="Warthog" />
        </a>
        <p>The Warthogs</p></div>
        </div>


</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop