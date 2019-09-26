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
                    <li class="dropdown menu-large hover-text">
                        <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown"> WOMEN</a>
                        <ul class="dropdown-menu megamenu row border-menu">
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
                <li class="dropdown menu-large hover-text">
                    <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown">MEN</a>
                    <ul class="dropdown-menu megamenu row border-menu">
                        <li>
                            <div class="col-sm-6 col-md-2">
                                <ul class="first-item">
                                    <li class="text">Men</li>
                                    <li>
                                        <a href="#">
                                            <img src="./images/lilly-pulitzer-embroidered-blossom.jpg" class="img-responsive"
                                                alt="product 1">
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
                            <div class="col-sm-6 col-md-2">
                                <ul class="">
                                    <li>
                                        <a href="#">
                                            <img src="./images/dress-mark-james-badgley-mischka-sweetheart.jpg"
                                                class="img-responsive" alt="product 1">
                                        </a>
                                    </li>
                                    <li>
                                    </li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </li>
                <li class="dropdown menu-large hover-text">
                    <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown">BLOG</a>

                </li>
                <li class="dropdown menu-large hover-text">
                    <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown">ABOUTDS</a>
                    <ul class="dropdown-menu megamenu row border-menu">
                        <li>
                            <div class="col-sm-6 col-md-2">
                                <ul>
                                    <li class="text">Shop</li>
                                    <li><a href="#">Auto</a></li>
                                    <li><a href="#">Carousel </a></li>
                                    <li><a href="#">Navigation</a></li>
                                    <li><a href="#">Four Grid</a></li>

                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-2">
                                <ul>
                                    <li class="text">Colection</li>
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
                                    <li class="text">Catinories</li>
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
                            <div class="col-sm-6 col-md-2">
                                <ul>
                                    <li class="text">Much</li>
                                    <li><a href="#">Easy </a></li>
                                    <li><a href="#">Calls </a></li>
                                    <li><a href="#">Custom </a></li>
                                    <li><a href="#">Slide </a></li>
                                </ul>
                            </div>

                        </li>
                    </ul>
                </li>
                <li class="dropdown menu-large hover-text">
                    <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown">BRANS</a>

                </li>
                <li class="dropdown menu-large hover-text">
                    <a href=" #" class="dropdown-toggle active text-name" data-toggle="dropdown">DEMOS</a>
                    <ul class="dropdown-menu megamenu row border-menu">
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic01.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic02.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic03.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic04.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic04.png" alt="">
                            </a>
                        </div>
                        <div class="col-sm-6 col-md-2">
                            <a>
                                <img src="./images/mic04.png" alt="">
                            </a>
                        </div>
                        
                    </ul>
                </li>
                </ul>
            </div>

        </div>
    </div>




</div>