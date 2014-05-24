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
                    <a href="#">Farm</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryCupsAfrica">Africa</a></li>
                        <li><a href="index.php/potteryCupsBugz">Bugz</a></li>
                        <li><a href="index.php/potteryCupsReptilez">Reptilez</a></li>
                        <li><a href="index.php/potteryCupsOther">Other</a></li>
                    </ul>
                </li>

                <li class="active has-dropdown">
                    <a href="#">Mug</a>
                    <ul class="dropdown">
                        <li><a href="index.php/potteryPlatesFarm">Plates</a></li>
                        <li><a href="index.php/potterySide-PlatesFarm">Side-Plates</a></li>
                        <li><a href="index.php/potteryBowlsFarm">Bowls</a></li>
                        <li><a href="index.php/potterySetsFarm">Sets</a></li>
                        <li><a href="index.php/potteryOtherFarm">Other</a></li>
                    </ul>
                </li>
                <li class="active has-dropdown">
                    <a href="#">Pottery</a>
                    <ul class="dropdown">
                        <li><a href="index.php/kitchenNapkinsFarm">Kitchen</a></li>
                        <li><a href="index.php/artPencilsFarm">Art Products</a></li>
                        <li><a href="index.php/cardsCardsFarm">Cards & Canvas</a></li>
                        <li><a href="index.php/otherComingSoonFarm">Other</a></li>
                    </ul>
                </li>
            </ul>
        </section>
    </nav>


    <h2>Farm - Cups</h2>
    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Horse, Farm Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Bull, Farm Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>

    </div>

    <div class="row">
        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Cockerel, Farm Collection. </p>
            <p>$8.99 <a href="#" class="button">Add to Basket</a></p>
        </div>


        <div class="large-6 medium-6 columns">
            <img src="img/thumbs/mug2.gif" alt="dummy" />
            </a>
            <p>Mug - The Pig, Farm Collection. </p>
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