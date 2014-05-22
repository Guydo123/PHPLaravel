@extends('layouts.master')

@section('title')
Contact Us
@stop

@section('content')
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