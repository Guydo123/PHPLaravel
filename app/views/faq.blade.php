@extends('layouts.master')

@section('title')
welcome to PHP Laravel
@stop

@section('content')
<h2>Asked Questions</h2>
<dl>
    <dt onclick="showItem('one'),hideItems('span','showanswer1')"><h3>What happens in the initial stages of a project?</h3><span class="showanswer1">(show_answer)</span></dt>
    <dd class="hide answers" id="one">In the beginning ...</dd>
    <dt onclick="showItem('two'),hideItems('span','showanswer2')"><h3>How often will information about the projects progress be discussed?</h3><span class="showanswer2">(show_answer)</span></dt>
    <dd class="hide answers" id="two">Every week we will have a meeting, if more is required we will...</dd>
    <dt onclick="showItem('three'),hideItems('span','showanswer3')"><h3>Who do we contact within the company if we have a question?</h3><span class="showanswer3">(show_answer)</span></dt>
    <dd class="hide answers" id="three">You will be assigned a Storm Trooper who will oversee the project.</dd>
    <dt onclick="showItem('four'),hideItems('span','showanswer4')"><h3>How much does a typical project cost?</h3><span class="showanswer4">(show_answer)</span></dt>
    <dd class="hide answers" id="four">The cost will depend on your midichlorian count...  </dd>
    <dt onclick="showItem('five'),hideItems('span','showanswer5')"><h3>How long does a typical project take to complete?</h3><span class="showanswer5">(show_answer)</span></dt>
    <dd class="hide answers" id="five">Roughly 3 days on Alderan</dd>
    <dt onclick="showItem('six'),hideItems('span','showanswer6')"><h3>What are the payment terms?</h3><span class="showanswer6">(show_answer)</span></dt>
    <dd class="hide answers" id="six">Payment terms are handeled by your assigned wookie</dd>
    <dt onclick="showItem('seven'),hideItems('span','showanswer7')"><h3>What happens after the project is completed?</h3><span class="showanswer7">(show_answer)</span></dt>
    <dd class="hide answers" id="seven">After the project is completed Yoda will monitor your website for the next 3 months... </dd>
</dl>
@stop

@section('footer')
<div class="small-12 columns panel">
    @parent
</div>
@stop
