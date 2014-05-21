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


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop