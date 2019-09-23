<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="zaro">
    <div class="container">
        <div class="top-header">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input placeholder="Cart: (emty)" type="text" class="form-control input-lg ">
                    </div>
                </div>
                <div class="col-md-4">
                    <h1>Alysum</h1>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <input id="search" placeholder="Search" type="text" class="form-control input-lg">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div id="white_background" class="slidelip">
        <div id="pattent">
            <!--MEGA MENU-->
            <div class="menu-container">
                <div class="container margin-auto">
                    <div class="mega-menu">
                        <div class="mobileMenuTitle">Menu</div>
                        <div class="navbar-header">
                        <!-- <h2 class="mb-title">Cosmetorix</h2> -->
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!-- <h2 class="mb-title">Cosmetorix</h2> -->
                        </div>
                        <ul class="mega-menu-ul">
                            <li class="dropdown mega-menu-item mega-active">
                                <a href="#" class="dropdown-toggle menu-item" data-toggle="dropdown">
                                    <span>Women</span>
                                </a>
                                <a href="#" class="opener"></a>
                                <ul class="container margin-auto dropdown-menu mega-dropdown-menu">
                                    <li class="col-md-2 col-sm-3">
                                        <ul class="first-item">
                                            <li>Men Collection</li>
                                            <li>
                                                <a href="#">
                                                    <img src="./images/dress-anna-sui-ambrosia-lace.jpg"
                                                        class="img-responsive" alt="product 1">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">Dress Anna Sui....</a>
                                                <span class="price">$309.00</span>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-10 col-sm-10">
                                        <ul class="full-width">
                                            <li class="col-md-2 col-sm-3">
                                                <ul>
                                                    <li>Features</li>
                                                    <li><a href="#">Auto Carousel</a></li>
                                                    <li><a href="#">Carousel Control</a></li>
                                                    <li><a href="#">Left & Right Navigation</a></li>
                                                    <li><a href="#">Four Columns Grid</a></li>

                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-3">
                                                <ul>
                                                    <li>Plus</li>
                                                    <li><a href="#">Navbar Inverse</a></li>
                                                    <li><a href="#">Pull Right Elements</a></li>
                                                    <li><a href="#">Coloured Headers</a></li>
                                                    <li><a href="#">Primary Buttons & Default</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-3">
                                                <ul>
                                                    <li>Much more</li>
                                                    <li><a href="#">Easy to Customize</a></li>
                                                    <li><a href="#">Calls to action</a></li>
                                                    <li><a href="#">Custom Fonts</a></li>
                                                    <li><a href="#">Slide down on Hover</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-3">
                                                <ul>
                                                    <li>Much more</li>
                                                    <li><a href="#">Easy to Customize</a></li>
                                                    <li><a href="#">Calls to action</a></li>
                                                    <li><a href="#">Custom Fonts</a></li>
                                                    <li><a href="#">Slide down on Hover</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-2 col-sm-3">
                                                <ul>
                                                    <li>Much more</li>
                                                    <li><a href="#">Easy to Customize</a></li>
                                                    <li><a href="#">Calls to action</a></li>
                                                    <li><a href="#">Custom Fonts</a></li>
                                                    <li><a href="#">Slide down on Hover</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-10 col-sm-10 ">
                                        <a>
                                            <img src="./images/banner-bottom.jpg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item">
                                <a href="#" class="menu-item dropdown-toggle" data-toggle="dropdown">
                                    <span>Men</span>
                                </a>
                                <a href="#" class="opener"></a>
                                <ul class="container margin-auto dropdown-menu mega-dropdown-menu">
                                    <li class="col-md-2 col-sm-3">
                                        <ul class="first-item">
                                            <li>
                                                <a href="#">
                                                    <img src="./images/banner-left.jpg" class="img-responsive"
                                                        alt="product 1">
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-md-8 col-sm-8">
                                        <ul class="full-width">
                                            <li class="col-md-3 col-sm-6">
                                                <ul>
                                                    <li>Features</li>
                                                    <li><a href="#">Auto Carousel</a></li>
                                                    <li><a href="#">Carousel Control</a></li>
                                                    <li><a href="#">Left & Right Navigation</a></li>
                                                    <li><a href="#">Four Columns Grid</a></li>

                                                </ul>
                                            </li>
                                            <li class="col-md-3 col-sm-6">
                                                <ul>
                                                    <li>Plus</li>
                                                    <li><a href="#">Navbar Inverse</a></li>
                                                    <li><a href="#">Pull Right Elements</a></li>
                                                    <li><a href="#">Coloured Headers</a></li>
                                                    <li><a href="#">Primary Buttons & Default</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3 col-sm-6">
                                                <ul>
                                                    <li>Much more</li>
                                                    <li><a href="#">Easy to Customize</a></li>
                                                    <li><a href="#">Calls to action</a></li>
                                                    <li><a href="#">Custom Fonts</a></li>
                                                    <li><a href="#">Slide down on Hover</a></li>
                                                </ul>
                                            </li>
                                            <li class="col-md-3 col-sm-6">
                                                <ul>
                                                    <li>Much more</li>
                                                    <li><a href="#">Easy to Customize</a></li>
                                                    <li><a href="#">Calls to action</a></li>
                                                    <li><a href="#">Custom Fonts</a></li>
                                                    <li><a href="#">Slide down on Hover</a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="col-md-2 col-sm-2">
                                        <ul class="first-item">
                                            <li>Men Collection</li>
                                            <li>
                                                <a href="#">
                                                    <img src="./images/dress-anna-sui-ambrosia-lace.jpg"
                                                        class="img-responsive" alt="product 1">
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">View all Collection

                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown mega-menu-item">
                                <a href="#" class="menu-item">
                                    <span>Blog</span>

                                </a>
                                <a href="#" class="opener"></a>
                            </li>
                            <li class="dropdown mega-menu-item">
                                <a href="#" class="menu-item">
                                    <span>About Us</span>
                                </a>
                                <a href="#" class="opener"></a>

                                <ul class="container margin-auto dropdown-menu mega-dropdown-menu">
                                    <li class="align-center full-width">
                                        <h2>Alysum - is the universal theme, with the pleasant and clean design.</h2>
                                        <p>With this theme you can easily create your unique shop, choosing any colors &
                                            over 500 Google fonts. </p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 align-center">
                                        <img src="./images/mic01.png" alt="">
                                        <h4>Responsive design</h4>
                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small
                                            cell phones.</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 align-center">
                                        <img src="./images/mic02.png" alt="">
                                        <h4>Responsive design</h4>
                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small
                                            cell phones.</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 align-center">
                                        <img src="./images/mic03.png" alt="">
                                        <h4>Responsive design</h4>
                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small
                                            cell phones.</p>
                                    </li>
                                    <li class="col-md-3 col-sm-3 align-center">
                                        <img src="./images/mic04.png" alt="">
                                        <h4>Responsive design</h4>
                                        <p> Alysum 100% responsive and supports all&nbsp;devices from desktop to small
                                            cell phones.</p>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown mega-menu-item">
                                <a href="#" class="menu-item">
                                    <span>Brands</span>
                                </a>
                                <a href="#" class="opener"></a>
                                <ul class="container margin-auto dropdown-menu mega-dropdown-menu">
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                    <li class="col-md-2 col-sm-2 brand">
                                        <img src="./images/4-manu_alysum.jpg" alt="">
                                    </li>
                                </ul>
                            </li>

                            <li class="dropdown mega-menu-item">
                                <a href="#" class="menu-item">
                                    <span>Demos</span>
                                </a>
                                <a href="#" class="opener"></a>
                                <ul class="dropdown-menu mega-dropdown-menu demos">
                                    <li><a>Demo 01 - Alysum</a></li>
                                    <li><a>Demo 01 - Alysum</a></li>
                                    <li><a>Demo 01 - Alysum</a></li>
                                    <li><a>Demo 01 - Alysum</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->

                </div>
            </div>

        </div>
    </div>
</div>