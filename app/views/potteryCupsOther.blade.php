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
                    <a href="#">Other</a>
                    <ul class="dropdown">

                        <li><a href="index.php/potteryCupsAfrica">Africa</a></li>
                        <li><a href="index.php/potteryCupsBugz">Bugz</a></li>
                        <li><a href="index.php/potteryCupsFarm">Farm</a></li>
                        <li><a href="index.php/potteryCupsReptilez">Reptilez</a></li>

                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Mug</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryPlatesOther">Plates</a></li>
                        <li><a href="index.php/potterySide-PlatesOther">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsOther">Bowls</a></li>
                        <li><a href="index.php/potterySetsOther">Sets</a></li>
                        <li><a href="index.php/potteryOtherOther">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Pottery</a>
                    <ul class="dropdown">
                        <li><a href="index.php/kitchenNapkinsOther">Kitchen</a></li>
                        <li><a href="index.php/artPencilsOther">Art Products</a></li>
                        <li><a href="index.php/cardsCardsOther">Cards & Canvas</a></li>
                        <li><a href="index.php/otherComingSoonOther">Other</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>


    <h2>Other Designs - Cups</h2>
    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 1, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 2, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 3, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 4, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 5, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - Other 6, Misc Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    @stop

    @section('footer')
    <div class="small-12 columns panel">
        @parent
    </div>
    @stop