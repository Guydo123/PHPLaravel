@extends('layouts.master')

@section('title')
Contact Us
@stop

@section('content')
<ul class="example-orbit" data-orbit data-options="animation:slide;
                  pause_on_hover: false;
                  animation_speed: 500;
                  timer_speed: 3000;
                  navigation_arrows:true;
                  bullets:false;">
    <li>
        <img class="BIg" src="img/Lightbox/Turtles.gif" alt="Turtles" />
        <div class="orbit-caption">
            The Turtles
        </div>
    </li>
    <li class="active">
        <img class="BIg" src="img/lightbox/Spring_bok.gif" alt="springbok" />
        <div class="orbit-caption">
            The Spring Bok
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Cockerel.gif" alt="cockerel" />
        <div class="orbit-caption">
            The Cockerel
        </div>
    </li>
    <li>
        <img class="BIg" src="img/lightbox/Termite.gif" alt="termite" />
        <div class="orbit-caption">
            The Termite
        </div>
    </li>
</ul>
<h2>Contact Us</h2>
<p>Feel free to contact us for any reason.
    Either send us an email, call us or fill in the form below.
    We will get back in touch as soon as possible.</p>
<h3>Call us on: 000000000000</h3>
<h3>Email us on: bugz@beastiez.com</h3>
       @if(isset($feedback))
            <h3>{{ $feedback }}</h3>
        @endif

<form action="index.php/contact" method="post" id="contact-form">

    <p>
        <label for="name">Your Name:</label>
        <input type="text" name="name" required>
    </p>
    <p>
        <label for="email">Your Email Address:</label>
        <input type="email" name="email">

    </p>
    <p>
        <label for="comment">Your Comment:</label>
        <textarea name="comment" id="comment" rows="10" cols="18"></textarea>
    </p>
    <p>
        <label>&nbsp;</label>
        <input type="submit" name="submit" value="Send Comment">
    </p>
</form>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop