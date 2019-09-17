<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-module-2040">
    <div class="section-title text-center pt-4 pb-5">
        <h2>HOT DEALS</h2>
        <h4>SAVE MORE</h4>
    </div>
    <div class="container-main">
        <div class="container-fluid">
            <div class="tab">
                <ul class="nav-menu nav nav-tabs justify-content-center" style="border-bottom:none">
                    <li class="nav-item active">
                        <a href="#hotels" data-toggle="tab" class="nav-link active" role="tab"><i class="fas fa-bed mr-2"></i>HOTELS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#holiday" data-toggle="tab" class="nav-link" role="tab"><i class="fas fa-suitcase mr-2"></i>HOLIDAYS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#flights" data-toggle="tab" class="nav-link" role="tab"><i class="fas fa-plane mr-2"></i>FLIGHTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#card" data-toggle="tab" class="nav-link" role="tab"><i class="fas fa-taxi mr-2"></i>CARS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#hotelflights" data-toggle="tab" class="nav-link" role="tab"><i class="fas fa-bed mr-2"></i>HOTEL+FLIGHTS</a>
                    </li>
                </ul>
                <div class="tab-content pt-4">
                    <div class="container tab-pane active show" id="hotels" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/offer3.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Devlok Hotel</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Main Road, Manali</p>
                                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$49 Avg/Night</h4>
                                        <h6>Per Night</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/offer2.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Devlok Hotel</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Main Road, Manali</p>
                                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$49 Avg/Night</h4>
                                        <h6>Per Night</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/offer1.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Devlok Hotel</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Main Road, Manali</p>
                                        <p>Lorem Ipsum is simply dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$49 Avg/Night</h4>
                                        <h6>Per Night</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/offer3.jpg" alt="">
                                            <h5>Devlok Hotel</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/offer2.jpg" alt="">
                                            <h5>Devlok Hotel</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/offer1.jpg" alt="">
                                            <h5>Devlok Hotel</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/offer3.jpg" alt="">
                                            <h5>Devlok Hotel</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container tab-pane fade" id="holiday" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/tour6.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Wonderful France</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i>Asia » Nepal</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>7 Days</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/tour5.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Hilly Austria</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Asia » Nepal</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$599</h4>
                                        <h6>5 Days</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                                <div class="row item">
                                    <div class="col-md-3 col-xs-3">
                                        <img src="./images/tour4.jpg" alt="">
                                    </div>
                                    <div class="col-md-7 col-xs-6">
                                        <h5>Wonderful Italy</h5>
                                        <p class="location"><i class="fas fa-map-marker-alt"></i> Asia » Nepal</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing industry.</p>
                                    </div>
                                    <div class="col-md-2 col-xs-3">
                                        <h4>$499</h4>
                                        <h6>7 Days</h6>
                                        <a href="" class="nav-link">Book</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/tour6.jpg" alt="">
                                            <h5>Wonderful France</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/tour5.jpg" alt="">
                                            <h5>Hilly Austria</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/tour4.jpg" alt="">
                                            <h5>Wonderful Italy</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 item-img">
                                        <div class="wapper">
                                            <img src="./images/tour3.jpg" alt="">
                                            <h5>Amazing Bangkok</h5>
                                            <a href="" class="nav-link">DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container tab-pane fade" id="flights" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;"></div>
                    <div class="container tab-pane fade" id="card" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;"></div>
                    <div class="container tab-pane fade" id="hotelflights" style="position: relative; overflow: hidden; height: 1076.47px; transition: height 250ms ease-out 0s;"></div>
                </div>
            </div>
        </div>
    </div>
</div>