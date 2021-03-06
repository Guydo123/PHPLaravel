@extends('layouts.master')

@section('title')
Designs - Farm
@stop

@section('content')

<h2>Designs</h2>

<div id="filter" class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="DesNav"><a href="index.php/designs">Africa</a></dd>
        <dd class="DesNav"><a href="index.php/designsTwo">Bugz</a></dd>
        <dd class="active DesNav"><a href="index.php/designsThree">Farm</a></dd>
        <dd class="DesNav"><a href="index.php/designsFour">Reptilez</a></dd>
        <dd class="DesNav"><a class="DesNavA" href="index.php/designsFive">Other</a></dd>
    </dl>
</div>

<div class="columns panel">
    <h2>Farm Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Horse.gif" title="The Horse - Farm Collection.">
            <img src="img/thumbs/Horsethumb.gif" alt="horse" />
        </a>
        <p>The Horse</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Bull.gif" title="The Bull - Farm Collection.">
            <img src="img/thumbs/Bullthumb.gif" alt="Bull" />
        </a>
        <p>The Bull</p></div>
        </div>
        <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Cockerel.gif" title="The Cockerel - Farm Collection.">
            <img src="img/thumbs/Cockerelthumb.gif" alt="Cockerel" />
        </a>
        <p>The Cockerel</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Pig.gif" title="The Pig - Farm Collection.">
            <img src="img/thumbs/Pigthumb.gif" alt="pig" />
        </a>
        <p>The Pig</p></div>
            </div>
            <div class="row">
    <p>More to be added...</p>
</div>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop