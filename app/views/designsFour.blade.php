@extends('layouts.master')

@section('title')
Designs - Reptilez
@stop

@section('content')

<h2>Designs</h2>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="DesNav"><a href="index.php/designs">Africa</a></dd>
        <dd class="DesNav"><a href="index.php/designsTwo">Bugz</a></dd>
        <dd class="DesNav"><a href="index.php/designsThree">Farm</a></dd>
        <dd class="active DesNav"><a href="index.php/designsFour">Reptilez</a></dd>
        <dd class="DesNav"><a class="DesNavA" href="index.php/designsFive"></a>Other</dd>
    </dl>
</div>
<div class="columns panel">
    <h2>Reptilez Collection</h2>
    <div class="row">
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Lizard.gif" title="The Lizard - Reptilez Collection.">
            <img src="img/thumbs/Lizardthumb.gif" alt="Lizard" />
        </a>
        <p>The Lizard</p></div>
    <div class="large-6 medium-6 columns">
        <a class="single_image"  href="img/lightbox/Turtles.gif" title="The Turtles - Reptilez Collection.">
            <img src="img/thumbs/Turtlesthumb.gif" alt="turtles" />
        </a>
        <p>The Turtles</p></div>
        </div>

    <p>More designs coming soon...</p>

</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop