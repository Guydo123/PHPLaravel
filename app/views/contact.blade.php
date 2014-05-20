@extends('layouts.master')

@section('title')
welcome to PHP Laravel
@stop

@section('content')
<h2>Welcome</h2>
<p>This is the contact page</p>

       @if(isset($feedback))
            <h3>{{ $feedback }}</h3>
        @endif

<form action="index.php/contact" method="post" id="contact-form">
    <p>
        <label for="name">Contact Name</label>
        <input type="text" name="name" required>
    </p>
    <p>
        <label for="email">Email Address</label>
        <input type="email" name="email">

    </p>
    <p>
        <label for="comment">Comment</label>
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