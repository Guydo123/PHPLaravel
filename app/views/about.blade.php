@extends('layouts.master')

@section('title')
About Us

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
<br>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="active"><a href="index.php/about">About Us</a></dd>
        <dd><a href="index.php/family">The Family</a></dd>
        <dd><a href="index.php/charities">Charities</a></dd>
    </dl>
</div>

<div class="large-10 medium-10 small-12 columns">
<h2>About Us</h2>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>What we do</h3>
<p>This is the about page</p>
</div>
<div class="large-6 medium-6 small-12 columns panel">
    <h3>Our Mission</h3>
    <p>This is the about page</p>
</div>

@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop