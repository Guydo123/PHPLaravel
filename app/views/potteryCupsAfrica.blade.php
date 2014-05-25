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
                        <li><a href="index.php/potteryCupsBugz">Bugz</a></li>
                        <li><a href="index.php/potteryCupsFarm">Farm</a></li>
                        <li><a href="index.php/potteryCupsReptilez">Reptilez</a></li>
                        <li><a href="index.php/potteryCupsOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Mug</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryPlatesAfrica">Plates</a></li>
                        <li><a href="index.php/potterySide-PlatesAfrica">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsAfrica">Bowls</a></li>
                        <li><a href="index.php/potterySetsAfrica">Sets</a></li>
                        <li><a href="index.php/potteryOtherAfrica">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Pottery</a>
                    <ul class="dropdown">
                        <li><a href="index.php/kitchenNapkinsAfrica">Kitchen</a></li>
                        <li><a href="index.php/artPencilsAfrica">Art Products</a></li>
                        <li><a href="index.php/cardsCardsAfrica">Cards & Canvas</a></li>
                        <li><a href="index.php/otherComingSoonAfrica">Other</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>
    <div id="prodNavMobile">
        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DD">Africa</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/potteryCupsBugz">Bugz</a></li>
                <li><a href="index.php/potteryCupsFarm">Farm</a></li>
                <li><a href="index.php/potteryCupsReptilez">Reptilez</a></li>
                <li><a href="index.php/potteryCupsOther">Misc</a></li>
            </ul>
        </div>

        <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDA">Mugs</a><br>
        <ul id="drop" data-dropdown-content class="f-dropdown">
            <li><a href="index.php/potteryPlatesFarm">Plates</a></li>
            <li><a href="index.php/potterySide-PlatesFarm">Side-Plates</a></li>
            <li><a href="index.php/potteryBowlsFarm">Bowls</a></li>
            <li><a href="index.php/potterySetsFarm">Sets</a></li>
            <li><a href="index.php/potteryOtherFarm">Other</a></li>

        </ul>

        <div>
            <a href="#" data-dropdown="drop" class="large secondary button dropdown" id="DDB">Pottery</a><br>
            <ul id="drop" data-dropdown-content class="f-dropdown">
                <li><a href="index.php/kitchenNapkinsFarm">Kitchen</a></li>
                <li><a href="index.php/artPencilsFarm">Art Products</a></li>
                <li><a href="index.php/cardsCardsFarm">Cards & Canvas</a></li>
                <li><a href="index.php/otherComingSoonFarm">Other</a></li>

            </ul>
        </div>
    </div>

    <h2>Africa - Cups</h2>
    <br><br>
    <div class="row-large">
        <div class="row-medium">
        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Cheetah, Africa Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Spring Bok, Africa Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    <div class="row-medium">
        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Rhino, Africa Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>
    </div>
<div class="row-large">
        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Hippo, Africa Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    <div class="row-medium">
        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Hippo, Africa Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-4 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Hippo, Africa Collection. </p>
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