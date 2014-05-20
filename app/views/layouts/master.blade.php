<!doctype html>

    <html>

    <head>
        <base href="http://localhost/PHPLarivel/public/">
        <meta charset="utf-8"/>
        <title>@yield('title')</title>
        <script src="js/vendor/modernizr.js"></script>
        <link href="css/foundation.min.css" type="text/css" rel="stylesheet">
        <link href="css/styles.css" type="text/css" rel="stylesheet">
        <link href="buttons/foundation_icons_social/stylesheets/social_foundicons.css" type="text/css" rel="stylesheet">
        <link href="buttons/foundation_icons_social/stylesheets/social_foundicons_ie7.css" type="text/css" rel="stylesheet">
    </head>

    <body onload="hideItems('dd','hide answers')">



    <header>
        <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar>
        <ul class="title-area">
        <li class="name"><h1><a><img src="img/straitLogo.gif" alt="straitLogo" class="straitLogo" </a></h1></li>

            <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>

            <section class="top-bar-section">
            <ul class="right">

                <li><a href="index.php">Home</a></li>
                <li><a href="index.php/about">About</a></li>
                <li><a href="index.php/products">Products</a></li>
                <li><a href="index.php/designs">Designs</a></li>
                <li><a href="index.php/contact">Contact</a></li>
                <li><a href="index.php/faq">FAQ</a></li>
                <li><a href="index.php/cart">Cart</a></li>
            </ul>
</section>
        </nav>
            </div>

    </header>

        </div>
    <div class="row" id="page">
    <div id="content" class="row">

     <section>
         <div id="page">
         @yield('content')
             </div>
     </section>




    </div>
</div>








      @section('footer')

        <footer>
            <nav class="top-bar" data-topbar>
                <ul class="title-area">
                    <li class="name"><h1><a><img src="img/miniLogo.gif" alt="mimiLogo" class="miniLogo" </a></h1></li>
                </ul>
            </nav>
        </footer>
    <form class="large-6 medium-6 columns">
        <fieldset>
            <legend>Subscribe to our Newsletter</legend>

            <label>Your Email:
                <input type="text" placeholder="Enter your email to recieve our newsletter...">
            </label>
        </fieldset>
    </form>
    <div class="large-2 medium-2 columns" id="social">
    <div id="socialA" class="social">
        <a href="#">
    <i class="foundicon-twitter"></i>
            </a>
        </div>
    <div class="social">
        <a href="#">
    <i class="foundicon-facebook"></i></a>
        </div>
    <div class="social">
        <a href="#">
    <i class="foundicon-linkedin"></i></a>
    </div>

    </div>
    <div id="img" class="large-4 medium-4">
        <a href="#">
        <img src="img/logo-2.gif" id="imgLogo" alt="logO" />
        </a>
    </div>
        @show
    <p><em>Copyright &copy; Bugz&amp; Beastiez 2014</em></p>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.topbar.js"></script>
    <script src="js/scripts.js"></script>
    <script>
        $(document).foundation();
    </script>
    </body>
    </html>





