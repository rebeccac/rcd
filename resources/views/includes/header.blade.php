<?php
// include(app_path().'/includes/common.php');
//
// use app\includes;
//
// // check if current page matches var and add active class to current menu item
// $active_index = addActive('index', $page);
// $active_about = addActive('about', $page);
// $active_contact = addActive('contact', $page);
// $active_gallery = addActive('gallery', $page);

?>

<header class="header">

    <nav class="mobile visible-xs-block">
        <div class="row">
            <div class="col-xs-12">
                <ul class="mobile-menu">
                    <li>
                        <a href="#" id="dropdown-link"><i class="fa fa-bars"></i> <span>Menu</span></a>
                        <ul class="s-m-i s-m-i-xs">
                            <li><a href="http://www.twitter.com/rjcordingley" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.pinterest.com/beccordingley/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="https://instagram.com/rebeccacdesigns/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        <ul class="drop" id="dropdown-menu">
                            <li class="menu-item"><a href="{{URL::to('/')}}">Home</a></li>
                            <li class="menu-item"><a href="{{ URL::to('about') }}">About</a></li>
                            <li class="menu-item"><a $class href="http://www.etsy.com" target="_blank">Etsy</a></li>
                            <li class="menu-item">Shop</li>
                            <li class="menu-item"><a href="{{ URL::to('gallery') }}">Gallery</a></li>
                            <li class="menu-item"><a href="{{URL::to('contact') }}">Contact</a></li>
                            <li class="menu-item">Web Development</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="heading">
        <div class="row">
            <div class="col-xs-3 col-sm-12 bottom-align">
                <img src="{{asset('images/logo3.png')}}" alt="RC logo" class="logo-img">
            </div>
            <div class="col-xs-9 col-sm-12 bottom-align">
                <h1 class="title"><a href="{{ URL::to('/') }}">REBECCA CORDINGLEY DESIGNS</a></h1>
            </div>
        </div>
    </div>

    <ul class="s-m-i hidden-xs">
        <li><a href="http://www.twitter.com/rjcordingley" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.pinterest.com/beccordingley/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
        <li><a href="https://instagram.com/rebeccacdesigns/" target="_blank"><i class="fa fa-instagram"></i></a></li>
    </ul>
    <div class="clear"></div>


    <nav class="nav hidden-xs">
        <div class="row">
            <div class="col-sm-12">
                <ul class="menu">
                    <li class="menu-item"><a href="{{URL::to('/')}}">HOME</a></li> |
                    <li class="menu-item"><a href="{{ URL::to('about') }}">ABOUT</a></li> |
                    <li class="menu-item"><a $class href="http://www.etsy.com" target="_blank">ETSY</a></li> |
                    <li class="menu-item">SHOP</li> |
                    <li class="menu-item"><a href="{{ URL::to('gallery') }}">GALLERY</a></li> |
                    <li class="menu-item"><a href="{{URL::to('contact') }}">CONTACT</a></li> |
                    <li class="menu-item">WEB DEVELOPMENT</li>
                </ul>
            </div><!-- col-xs-12 -->
        </div><!-- row -->
    </nav>

</header>
