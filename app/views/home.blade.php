@extends('layouts.master')

@section('title')
welcome to Bugz &amp; Beastiez
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
        <img src=img/slideshow/rhino.jpg" alt="rhino" />
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
<div class="large-4 medium-4 columns panel">
    <a href="index.php/products">
        <h4> Welcome</h4>
        <div class="cycle-slideshow">
        <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
        <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
        <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            </div>
    </a>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

</div>
<div class="large-4 medium-4 columns panel">
    <a href="index.php/products">
        <h4> Welcome</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            </div>
    </a>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

</div>
<div class="large-4 medium-4 columns panel">
    <a href="index.php/products">
    <h4> Welcome</h4>
        <div class="cycle-slideshow">
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
            <img class="homeProd" src="img/thumbs/rhinothumbnail.jpg" alt="#" />
       </div>
    </a>

    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,

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