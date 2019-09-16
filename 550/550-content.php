<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
  
        <div class="type-31">
            
            <div class="container">
                <div class="navbar-wrapper navbar-wrapperBig"><div class="ct-topBar text-center">
                        <div class="container">
                            <ul class="ct-panel--user list-inline text-uppercase pull-left">
                                <li><a href="#" >login<i class="fa fa-lock"></i></a></li>
                                <li><a href="#">sign up<i class="fa fa-user"></i></a></li>
                            </ul>
                            <div class="ct-widget--group pull-right">
                                <ul class="ct-widget--socials list-inline text-uppercase">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-wordpress"></i></a></li>
                                </ul>
                                <div class="btn-group">
                                    <button type="button" class="btn" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/flags/png/england.png" alt="UK">English <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><img src="images/flags/png/england.png" alt="UK">English</a></li>
                                        <li><a href="#"><img src="images/flags/png/de.png" alt="GER">German</a></li>
                                        <li><a href="#"><img src="images/flags/png/pl.png" alt="PL">Polish</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div><nav class="navbar navbar-default navbar-parts yamm  animatedHeadroom" >
                        <div class="navbar-headerTop">
                            <div class="container">
                                <div class="btn-group pull-left">
                                    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-bars"></i> Browse Courses
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">HTML</a></li>
                                        <li><a href="#">CSS</a></li>
                                        <li><a href="#">JS</a></li>
                                    </ul>
                                </div>
                                <div class="navbar-header">
                                    <a href="#"><img src="images/demo-content/logo.png" alt="logo"></a>
                                </div>
                                <div class="pull-right ct-searchInput--icon">
                                    <div class="form-group">
                                        <input id="search" placeholder="Search for Courses" required="" type="text" class="form-control input-lg ">
                                    </div>
                                    <button type="submit" class="ct-search-button"><i class="fa fa-search"></i></button>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="container">
                            <ul class="nav navbar-nav">
                                <li class="dropdown yamm-fw"><a href="#">Home</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3 col-md-3 col-xs-3 ">
                                                        <a href="#">Home Page V1</a>
                                                        <a href="#">Home Page V2</a>
                                                        <a href="#">Home Page V3</a>
                                                        <a href="#">Home Page V4</a>
                                                        <a href="#">Home Page V5</a>
                                                    </div>
                                                    <div class="col-sm-3  col-md-3 col-xs-3">
                                                        <a href="#">Home Page V6</a>
                                                        <a href="#">Home Page V7</a>
                                                        <a href="#">Home Page V8</a>
                                                        <a href="#">Home Page V9</a>
                                                        <a href="#">Home Page V10</a>
                                                    </div>
                                                    <div class="col-sm-3  col-md-3 col-xs-3">
                                                        <a href="#">Home Page V11</a>
                                                        <a href="#">Home Page V12</a>
                                                        <a href="#">Home Page V13</a>
                                                        <a href="#">Home Page V14</a>
                                                        <a href="#">Onepager</a>
                                                    </div>
                                                    <div class="col-sm-3  col-md-3 col-xs-3">
                                                        <a href="#">Home Page V15</a>
                                                        <a href="#">Home Page V16</a>
                                                        <a href="#">Home Page V17</a>
                                                        <a href="#">Home Page V18</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw"><a href="#">Courses</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - inline</a>
                                                        <a href="#">Single Course V1</a>
                                                        <a href="#">Single Course V2</a>
                                                        <a href="#">Single Course V3</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - thumbnails</a>
                                                        <a href="#">Single Course V4</a>
                                                        <a href="#">Single Course V5</a>
                                                        <a href="#">Single Course V6</a>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <a href="#">List of Courses - without sidebar</a>
                                                        <a href="#">Single Course V7</a>
                                                        <a href="#">Single Course V8</a>
                                                        <a href="#">Single Course V9</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw active"><a href="#">Pages</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <a class="active" href="#">List of Members</a>
                                                        <a href="#">Single Member V1</a>
                                                        <a href="#">Single Member V2</a>
                                                        <a href="#">Gallery V1</a>
                                                        <a href="#">Gallery V5</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Blog V1</a>
                                                        <a href="#">Blog V2</a>
                                                        <a href="#">Blog Single V1</a>
                                                        <a href="#">Gallery V2</a>
                                                        <a href="#">Our Universities</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">Blog Single V2</a>
                                                        <a href="#">Contact V1</a>
                                                        <a href="#">Contact V2</a>
                                                        <a href="#">Gallery V3</a>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <a href="#">404 V1</a>
                                                        <a href="#">404 V2</a>
                                                        <a href="#">404 V3</a>
                                                        <a href="#">Gallery V4</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown yamm-fw">
                                    <a href="#">Features</a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="yamm-content">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-th"></i> Grid System</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-font"></i> Typography</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-link"></i> Buttons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-align-justify"></i> Forms</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-table"></i> Tables</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-navicon"></i> Sliders</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-money"></i> Pricing Tables</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-th-large"></i> Icon Boxes</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-users"></i> Person Boxes</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-plus"></i> Counters</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-toggle-on"></i> Toggables</a>
                                                            </li>
                                                            <li><a href="#"><i class="fa fa-fw fa-play"></i> Media Sections</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <ul class="list-unstyled">
                                                            <li><a href="#"><i class="fa fa-fw fa-area-chart"></i> Charts</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-bars"></i> Progress Bars</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-star-half-full"></i> Progress
                                                                    Icons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-list"></i> Lists Simple</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-list"></i> Lists Icons</a></li>
                                                            <li><a href="#"><i class="fa fa-fw fa-code"></i> For developers</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div>
                <div class="ct-site--map ct-u-backgroundGradient">
                    <div class="container">
                        <div class="ct-u-displayTableVertical text-capitalize">
                            <div class="ct-u-displayTableCell">
                                <span class="ct-u-textBig">
                                    Professors
                                </span>
                            </div>
                            <div class="ct-u-displayTableCell text-right">
                                <span class="ct-u-textNormal ct-u-textItalic">
                                    <a href="#">Home</a> / <a href="#">Member</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         