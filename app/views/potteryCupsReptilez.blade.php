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
                    <a href="#">Reptilez</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryCupsAfrica">Africa</a></li>
                        <li><a href="index.php/potteryCupsBugz">Bugz</a></li>
                        <li><a href="index.php/potteryCupsFarm">Farm</a></li>
                        <li><a href="index.php/potteryCupsOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Mug</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryPlatesReptilez">Plates</a></li>
                        <li><a href="index.php/potterySide-PlatesReptilez">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsReptilez">Bowls</a></li>
                        <li><a href="index.php/potterySetsReptilez">Sets</a></li>
                        <li><a href="index.php/potteryOtherReptilez">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Pottery</a>
                    <ul class="dropdown">
                        <li><a href="index.php/kitchenNapkinsReptilez">Kitchen</a></li>
                        <li><a href="index.php/artPencilsReptilez">Art Products</a></li>
                        <li><a href="index.php/cardsCardsReptilez">Cards & Canvas</a></li>
                        <li><a href="index.php/otherComingSoonReptilez">Other</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>


    <h2>Reptilez - Cups</h2>
    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Lizard, Reptilez Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Turtles, Reptilez Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

  <p>More coming soon...</p>

    @stop

    @section('footer')
    <div class="small-12 columns panel">
        @parent
    </div>
    @stop