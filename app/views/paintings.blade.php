@extends('layouts.master')

@section('title')
welcome to PHP Laravel
@stop

@section('content')

<div class="small-12 columns panel">
<h2>Welcome</h2>
<p>This is the news page</p>

</div>

@foreach($paintings as $item)
<div class="small-6 columns panel">
    <h3>{{ $item->title }}</h3>
    <p>{{ $item->body }}</p>
</div>
@endforeach





@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop