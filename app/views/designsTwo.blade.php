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
    <h2>Bugz Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bee.gif" title="The Bee - Bugz Collection.">
            <img src="img/thumbs/Beethumb.gif" alt="bee" />
        </a>
        <p>The Bee</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Butterfly.gif" title="The Butterfly - Bugz Collection.">
            <img src="img/thumbs/Butterflythumb.gif" alt="butterfly" />
        </a>
        <p>The Butterfly</p></div>
        </div>
        <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Termite.gif" title="The Termite - Bugz Collection.">
            <img src="img/thumbs/Termitethumb.gif" alt="Termite" />
        </a>
        <p>The Termite</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bug.gif" title="The Bug - Bugz Collection.">
            <img src="img/thumbs/Bugthumb.gif" alt="bug" />
        </a>
        <p>The Bug</p></div>
            </div>
            <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/rhino.jpg" title="Rhino - Africa Collection.">
            <img src="img/thumbs/rhinothumbnail.jpg" alt="rhino" />
        </a>
        <p>The Rhino</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/rhino.jpg" title="Rhino - Africa Collection.">
            <img src="img/thumbs/rhinothumbnail.jpg" alt="rhino" />
        </a>
        <p>The Rhino</p></div>
</div>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop