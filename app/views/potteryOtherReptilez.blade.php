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

        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">

                <li class="active has-dropdown">
                    <a href="#">Reptilez</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryOtherAfrica">Africa</a></li>
                        <li><a href="index.php/potteryOtherBugz">Bugz</a></li>
                        <li><a href="index.php/potteryOtherFarm">Farm</a></li>
                        <li><a href="index.php/potteryOtherOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Other</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryMugsReptilez">Mugs</a></li>
                        <li><a href="index.php/potteryPlatesReptilez">Plates</a></li>
                        <li><a href="index.php/potterySPlatesReptilez">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsReptilez">Bowls</a></li>
                        <li><a href="index.php/potterySetsReptilez">Sets</a></li>

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
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DD">Reptilez</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/potteryBowlsAfrica">Africa</a></li>
                <li><a href="index.php/potteryBowlsBugz">Bugz</a></li>
                <li><a href="index.php/potteryBowlsFarm">Farm</a></li>
                <li><a href="index.php/potteryBowlsMisc">Misc</a></li>
            </ul>
        </div>

        <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDA">Other</a><br>
        <ul id="drop" data-dropdown-content class="f-dropdown">
            <li><a href="index.php/potteryMugsReptilez">Mugs</a></li>
            <li><a href="index.php/potteryPlatesReptilez">Plates</a></li>
            <li><a href="index.php/potterySPlatesReptilez">Side-Plates</a></li>
            <li><a href="index.php/potteryBowlsReptilez">Bowls</a></li>
            <li><a href="index.php/potterySetsReptilez">Sets</a></li>

        </ul>

        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDB">Ceramics</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/comingSoon">Tableware</a></li>
                <li><a href="index.php/comingSoon">Art Products</a></li>
                <li><a href="index.php/comingSoon">Cards & Canvas</a></li>
                <li><a href="index.php/comingSoon">Other</a></li>

            </ul>
        </div>
    </div>


    <h2>Reptilez - Other Designs</h2>
    <br><br>
    <div class="large-row">
        <div class="medium-row">
            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The Lizard</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>


            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The Turtles</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>

        </div>
        <div class="medium-row">
            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The ---</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>

        </div>
        <div class="large-row">
            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The ---</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>

        </div>
        <div class="medium-row">
            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The ---</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>


            <div class="large-4 medium-6 columns panel">
                <img src="img/thumbs/mug2.gif" alt="dummy" />
                </a>
                <p>The ---</p>
                <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
            </div>
        </div>
    </div>

    @stop

    @section('footer')
    <div class="small-12 columns panel">
        @parent
    </div>
    @stop