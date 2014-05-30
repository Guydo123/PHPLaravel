@extends('layouts.master')

@section('title')
Designs - Misc
@stop

@section('content')

<h2>Designs</h2>
<div id="filter" class="large-12 medium-12 small-12 columns">
    <dl class="sub-nav">

        <dd class="DesNav"><a href="index.php/designs">Africa</a></dd>
        <dd class="DesNav"><a href="index.php/designsTwo">Bugz</a></dd>
        <dd class="DesNav"><a href="index.php/designsThree">Farm</a></dd>
        <dd class="DesNav"><a href="index.php/designsFour">Reptilez</a></dd>
        <dd class="active DesNav"><a class="DesNavA" href="index.php/designsFive">Other</a></dd>
    </dl>
</div>
<div class="columns panel">
    <h2>Coming Soon...</h2>


</div>


@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop