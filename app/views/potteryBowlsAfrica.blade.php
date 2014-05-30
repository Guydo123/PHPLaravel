@extends('layouts.master')

@section('title')
Products - Ceramics
@stop

@section('content')

<h1>Products</h1>


<div class="columns panel">
    <nav class="top-bar" data-topbar>
        <ul class="title-area">
            <li class="name">
                <h1><a href="index.php/potteryCupsBugz">Ceramics</a></h1>
            </li>
        </ul>
        <!--
               <section class="top-bar-section">
                   <!-- Right Nav Section -->
           <!--
            <ul class="right">

                <li class="active has-dropdown">
                    <a href="#">Africa</a>
                    <ul class="dropdown">
                        <li><a href="index.php/index.php/get-type?ty={{ $item->type_id }}">Bugz</a></li>
                        <li><a href="index.php/potteryBowlsFarm">Farm</a></li>
                        <li><a href="index.php/potteryBowlsReptilez">Reptilez</a></li>
                        <li><a href="index.php/potteryBowlsOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Bowls</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryMugsAfrica">Mugs</a></li>
                        <li><a href="index.php/potteryPlatesAfrica">Plates</a></li>
                        <li><a href="index.php/potterySPlatesAfrica">Side-Plates</a></li>

                        <li><a href="index.php/potterySetsAfrica">Sets</a></li>
                        <li><a href="index.php/potteryOtherAfrica">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Ceramics</a>
                    <ul class="dropdown">
                        <li><a href="index.php/comingSoon">Tableware</a></li>
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
                <li><a href="index.php/potteryBowlsBugz">Bugz</a></li>
                <li><a href="index.php/potteryBowlsFarm">Farm</a></li>
                <li><a href="index.php/potteryBowlsReptilez">Reptilez</a></li>
                <li><a href="index.php/potteryBowlsOther">Misc</a></li>
            </ul>
        </div>

        <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDA">Bowls</a><br>
        <ul id="drop" data-dropdown-content class="f-dropdown">
            <li><a href="index.php/potteryMugsAfrica">Mugs</a></li>
            <li><a href="index.php/potteryPlatesAfrica">Plates</a></li>
            <li><a href="index.php/potterySPlatesAfrica">Side-Plates</a></li>

            <li><a href="index.php/potterySetsAfrica">Sets</a></li>
            <li><a href="index.php/potteryOtherAfrica">Other</a></li>

        </ul>

        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDB">Ceramics</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/comingSoon">Table</a></li>
                <li><a href="index.php/comingSoon">Art Products</a></li>
                <li><a href="index.php/comingSoon">Cards & Canvas</a></li>
                <li><a href="index.php/comingSoon">Other</a></li>

            </ul>
        </div>
    </div>
-->
    <h2>Africa - Bowls</h2>
    <br><br>
    <div class="row-large">
        <div class="row-medium">
            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The Cheetah</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>




        </div>


        </div>


        </div>
    </div>
    @stop

    @section('footer')
    <div class="small-12 columns panel">
        @parent
    </div>
    @stop