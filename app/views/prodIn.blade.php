@extends('layouts.master')

@section('title')
welcome to PHP Laravel
@stop

@section('content')

<div class="small-12 columns panel">
    <h2>Welcome</h2>
    <p>This is the news page</p>

</div>

@foreach($prodIn as $item)
<div class="small-6 columns panel">
    <h3><a href="index.php/get-style?sty={{ $item->style_id }}">{{ $item->style }}</a></h3>
</div>
@endforeach





@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop