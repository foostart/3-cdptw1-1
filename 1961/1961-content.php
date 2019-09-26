<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1961">
    <div class="logo"><img src="./images/logo_1498803066__51021.jpg" alt="hinh1"></div>
    <div id="menuduoi">
        <nav class="navbar navbar-default duoi">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                <ul class="nav navbar-nav">
                    <li class="Earrings"><a class="ring" href="#">Rings<i class="fa muitenmenu" aria-hidden="true"></i></a>
                        <ul class="noidungnho">
                            <li class="col-md-3 All"><a class="all" href="#">All Rings</a></li>

                            <li class="col-md-3 "><a class="all" href="#">Gold</a>
                                <ul class="menu">
                                    <li>Round Royal</li>
                                    <li>test</li>
                                </ul>
                            </li>
                            <li class="col-md-3"><a class="all" href="#">Diamond</a>
                                <ul class="menu">
                                    <li>Heart</li>
                                    <li>test1</li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                   <li><a class="ring" href="#">Earrigns</a></li>
                    <li><a class="ring" href="#">Necklace</a></li>
                    <li><a class="ring" href="#">Bracelets</a></li>
                    <li><a class="ring" href="#">Bangles</a></li>
                    <li><a class="ring" href="#">Solitaies</a></li>
                    <li><a class="ring" href="#">Blog</a></li>
                    <li><a class="ring" href="#">Shipping & Returns</a></li>
                    <li class="zz"><a class="ring" href="#"><img class="hinhvohang" src="images/icons_cart-128.png" alt="hinh2">0 item - $0,00</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

