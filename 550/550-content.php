<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-550">
    <div class="header">
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
                                        <a href="#">Home Page V1</a>
                                        <a href="#">Home Page V2</a>
                                        <a href="#">Home Page V3</a>
                                        <a href="#">Home Page V4</a>
                                        <a href="#">Home Page V5</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw"><a href="#">Courses</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <a href="#">List of Courses - inline</a>
                                        <a href="#">Single Course V1</a>
                                        <a href="#">Single Course V2</a>
                                        <a href="#">Single Course V3</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw active"><a href="#">Pages</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">      
                                        <a class="active" href="#">List of Members</a>
                                        <a href="#">Single Member V1</a>
                                        <a href="#">Single Member V2</a>
                                        <a href="#">Gallery V1</a>
                                        <a href="#">Gallery V5</a>  
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown yamm-fw">
                            <a href="#">Features</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <ul class="list-unstyled">
                                            <li><a href="#"><i class="fa fa-fw fa-th"></i> Grid System</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-font"></i> Typography</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-link"></i> Buttons</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-align-justify"></i> Forms</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-table"></i> Tables</a></li>
                                            <li><a href="#"><i class="fa fa-fw fa-navicon"></i> Sliders</a></li>
                                        </ul>
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

