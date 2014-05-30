@extends('layouts.master')

@section('title')
Products - Mugs
@stop

@section('content')

<h1>Products</h1>


<div class="columns panel">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php/potteryCupsBugz">Pottery</a></h1>
            </li>
        </ul>

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">

                <li class="active has-dropdown">
                    <a href="#">Africa</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryMugsBugz">Bugz</a></li>
                        <li><a href="index.php/potteryMugsFarm">Farm</a></li>
                        <li><a href="index.php/potteryMugsReptilez">Reptilez</a></li>
                        <li><a href="index.php/potteryMugsOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Mug</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryPlatesAfrica">Plates</a></li>
                        <li><a href="index.php/potterySPlatesAfrica">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsAfrica">Bowls</a></li>
                        <li><a href="index.php/potterySetsAfrica">Sets</a></li>
                        <li><a href="index.php/potteryOtherAfrica">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Pottery</a>
                    <ul class="dropdown">
                        <li><a href="index.php/comingSoon">Kitchen</a></li>
                        <li><a href="index.php/comingSoon">Art Products</a></li>
                        <li><a href="index.php/comingSoon">Cards & Canvas</a></li>
                        <li><a href="index.php/comingSoon">Other</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>
    <div id="prodNavMobile">
        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DD">Africa</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/potteryMugsBugz">Bugz</a></li>
                <li><a href="index.php/potteryMugsFarm">Farm</a></li>
                <li><a href="index.php/potteryMugsReptilez">Reptilez</a></li>
                <li><a href="index.php/potteryMugsOther">Misc</a></li>
            </ul>
        </div>

        <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDA">Mugs</a><br>
        <ul id="drop" data-dropdown-content class="f-dropdown">
            <li><a href="index.php/potteryPlatesAfrica">Plates</a></li>
            <li><a href="index.php/potterySPlatesAfrica">Side-Plates</a></li>
            <li><a href="index.php/potteryBowlsAfrica">Bowls</a></li>
            <li><a href="index.php/potterySetsAfrica">Sets</a></li>
            <li><a href="index.php/potteryOtherAfrica">Other</a></li>

        </ul>

        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDB">Pottery</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/comingSoon">Kitchen</a></li>
                <li><a href="index.php/comingSoon">Art Products</a></li>
                <li><a href="index.php/comingSoon">Cards & Canvas</a></li>
                <li><a href="index.php/comingSoon">Other</a></li>

            </ul>
        </div>
    </div>

    <h2>Coming Soon...</h2>
    <br><br>

    @stop

    @section('footer')
    <div class="small-12 columns panel">
        @parent
    </div>
    @stop