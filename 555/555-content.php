<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-555">
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-md-6">
                    <div class="header_contai">
                        <p>Wrlcover to virut over writer <a href="#"> Nark(riday 50% al) erlire size + Shore</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_contai2 ">
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Fod & Store</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>My Account</a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Frewcrocring </a>
                        <a><i class="fa fa-shopping-cart" aria-hidden="true"></i>Emg </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="title1">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                    <h2>CATEGORIES</h2>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 ">
                <div class="title2">
                    <h1><a href="#">a</a>neue.</h1>
                </div>
            </div>
        </div>
        <!-- menu-->
        <div class="menu">
            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav m-auto mt-2 mt-lg-0">
                        <li class="nav-item dropdown dmenu ">
                            <a class="nav-link" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false" style="color: #ff7f00;">HOME</a>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">SHOP</a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>   
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">WOMEN'S</a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">MEN'S</a>
                            <div class="dropdown-menu sm-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">Action 1</a>
                                <a class="dropdown-item" href="#">Action 2</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">PACES</a>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">FEATURE</a>
                        </li>
                        <li class="nav-item dropdown dmenu">
                            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">BLOG</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="container text">
                <div class="row">
                    <div class="col-md-6 text1">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo natus facere, dolor inventore
                        magni a necessitatibus voluptate architecto deleniti asperiores quibusdam molestiae eius nobis,
                        excepturi error. Quasi vel ullam maxime!
                    </div>
                    <div class="col-md-6 text1">
                         Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo natus facere, dolor inventore
                        magni a necessitatibus voluptate architecto deleniti asperiores quibusdam molestiae eius nobis,
                        excepturi error. Quasi vel ullam maxime!
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>