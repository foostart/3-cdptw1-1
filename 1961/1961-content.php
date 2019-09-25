<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<script type="text/javascript">
$(document).ready(function () {
var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      loop: true,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
});
</script>
<div class="type-1961">
    <a href="javascript:void(0);" class="icon">
        <i class="fa fa-bars"></i></a>
        <div class="logo"><img src="./images/logo_1498803066__51021.jpg" alt="hinh1"></div>
        <div id="menuduoi">
            <nav class="navbar navbar-default duoi">
                <div class="container-fluid">
                    <div class="navbar-header trendau"><a class="navbar-brand" href="#"></a></div>
                    <ul class="nav navbar-nav">
                        <li class="Earrings"><a class="ring" href="#">Rings<i class="fa fa-angle-down muitenmenu" aria-hidden="true"></i></a>
                            <ul class="noidungnho">
                                <li class="col-md-3 All"><a class="all" href="#">All Rings</a></li>

                                <li class="col-md-3 Gold"><a class="all" href="#">Gold</a>
                                    <ul class="menu">
                                        <li class="sang-len">Round Royal</li>
                                        <li class="sang-len">test</li>
                                    </ul>
                                </li>
                                <li class="col-md-3 Gold"><a class="all" href="#">Diamond</a>
                                    <ul class="menu">
                                        <li class="sang-len">Heart</li>
                                        <li class="sang-len">test1</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>	

                        <li  id="menunho"><a class="ring" href="#">Earrings<i class="fa fa-angle-down muitenmenu" aria-hidden="true"></i></a>
                            <ul class="noidungmenunho">
                                <li class="col-md-3 All"><a class="all" href="#">All Earrings</a></li>

                                <li class="col-md-3 Gold"><a class="all" href="#">Real Diamond</a>
                                    <ul class="menu">
                                        <li class="sang-len">Amor Diamond Ring</li>
                                        <li class="sang-len">Chand Bali</li>
                                        <li class="sang-len">White Gold</li>
                                    </ul>
                                </li>
                                <li class="col-md-3 Gold"><a class="all" href="#">Fancy Earring</a>
                                    <ul class="menu">
                                        <li class="sang-len">Bella Twisted</li>
                                        <li class="sang-len">Peacock Era</li>
                                        <li class="sang-len">Perls</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
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
        <div class="img-swiper">
           <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/1.jpg" alt="hinh1"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/2.jpg" alt="hinh2"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/4.jpg" alt="hinh4"/>
            </div>
            <div class="swiper-slide">
                <img src="<?php echo $url_path ?>/images/5.jpg" alt="hinh5"/>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>
</div>

