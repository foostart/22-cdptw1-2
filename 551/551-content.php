<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-551">
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
    <div class="container">
        <div class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown menu-large">
                        <a href=" #" class="dropdown-toggle active" data-toggle="dropdown"> WOMEN</a>
                        <ul class="dropdown-menu megamenu row">
                            <li>
                                <div class="col-sm-6 col-md-2">
                                    <ul class="first-item">
                                        <li class="text">MenCollection</li>
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
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <ul>
                                        <li class="text">Features</li>
                                        <li><a href="#">Auto</a></li>
                                        <li><a href="#">Carousel </a></li>
                                        <li><a href="#">Navigation</a></li>
                                        <li><a href="#">Four Grid</a></li>

                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <ul>
                                        <li class="text">Plus</li>
                                        <li><a href="#">Inverse</a></li>
                                        <li><a href="#">Pull Elements</a></li>
                                        <li><a href="#">Coloured </a></li>
                                        <li><a href="#">Primary </a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <ul>
                                        <li class="text">Much more</li>
                                        <li><a href="#">Easy </a></li>
                                        <li><a href="#">Calls </a></li>
                                        <li><a href="#">Custom </a></li>
                                        <li><a href="#">Slide r</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <ul>
                                        <li class="text">Features</li>
                                        <li><a href="#">Carousel</a></li>
                                        <li><a href="#">Carousel </a></li>
                                        <li><a href="#">Navigation</a></li>
                                        <li><a href="#"> Grid</a></li>

                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-2">
                                    <ul>
                                        <li class="text">Much</li>
                                        <li><a href="#">Easy </a></li>
                                        <li><a href="#">Calls </a></li>
                                        <li><a href="#">Custom </a></li>
                                        <li><a href="#">Slide </a></li>
                                    </ul>
                                </div>
                                <li class="col-md-10 col-sm-10 ">
                                    <a>
                                        <img src="./images/banner-bottom.jpg" alt="">
                                    </a>
                                </li>

                            </li>
                        </ul>
                    </li>

                    <!-- <li class="dropdown menu-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                        <ul class="dropdown-menu megamenu row">
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Glyphicons</li>
                                    <li><a href="#">Available glyphs</a></li>
                                    <li class="disabled"><a href="#">How to use</a></li>
                                    <li><a href="#">Examples</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Dropdowns</li>
                                    <li><a href="#">Example</a></li>
                                    <li><a href="#">Aligninment options</a></li>
                                    <li><a href="#">Headers</a></li>
                                    <li><a href="#">Disabled menu items</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Button groups</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Button toolbar</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Nesting</a></li>
                                    <li><a href="#">Vertical variation</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Button dropdowns</li>
                                    <li><a href="#">Single button dropdowns</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Input groups</li>
                                    <li><a href="#">Basic example</a></li>
                                    <li><a href="#">Sizing</a></li>
                                    <li><a href="#">Checkboxes and radio addons</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Navs</li>
                                    <li><a href="#">Tabs</a></li>
                                    <li><a href="#">Pills</a></li>
                                    <li><a href="#">Justified</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul>
                                    <li class="dropdown-header">Navbar</li>
                                    <li><a href="#">Default navbar</a></li>
                                    <li><a href="#">Buttons</a></li>
                                    <li><a href="#">Text</a></li>
                                    <li><a href="#">Non-nav links</a></li>
                                    <li><a href="#">Component alignment</a></li>
                                    <li><a href="#">Fixed to top</a></li>
                                    <li><a href="#">Fixed to bottom</a></li>
                                    <li><a href="#">Static top</a></li>
                                    <li><a href="#">Inverted navbar</a></li>
                                </ul>
                            </li>
                        </ul>

                    </li> -->
                </ul>
            </div>

        </div>
    </div>
    <div id="white_background" class="slidelip">
        <!--MEGA MENU-->
        <div class="menu-container">
            <div class="container margin-auto">
                <div class="mega-menu">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
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

                        </li>
                        <li class="dropdown mega-menu-item">
                            <a href="#" class="menu-item">
                                <span>Blog</span>

                            </a>
                        </li>
                        <li class="dropdown mega-menu-item">
                            <a href="#" class="menu-item">
                                <span>About Us</span>
                            </a>
                        </li>
                        <li class="dropdown mega-menu-item">
                            <a href="#" class="menu-item">
                                <span>Brands</span>
                            </a>
                        </li>
                        <li class="dropdown mega-menu-item">
                            <a href="#" class="menu-item">
                                <span>Demos</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>



</div>