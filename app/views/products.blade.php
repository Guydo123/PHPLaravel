@extends('layouts.master')

@section('title')
welcome to PHP Laravel
@stop

@section('content')

<div class="small-12 columns panel">
    <h2>Welcome</h2>
    <p>This is the news page</p>

</div>


<form method="get" action="index.php/products">

<select name="cat">
    @foreach($categories as $cat)
<option value="{{$cat->category_id}}">{{$cat->category}}</option>
    @endforeach
    </select>


    <select name="type">
        @foreach($types as $type)
        <option value="{{$type->type_id}}">{{$type->type}}</option>
        @endforeach
    </select>


    <select name="style">
        @foreach($styles as $style)
        <option value="{{$style->style_id}}">{{$style->style}}</option>
        @endforeach
    </select>




</form>


@foreach($product as $prod)
<p>{{$prod->title}}</p>


@endforeach
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop