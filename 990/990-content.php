<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-988">
            <div class="container">
                <header>
                    <h1>Slideshow animation awesome and</h1>
                    <h2>hot girl beautiful with full stuff</h2>
                </header>
                <div class="row">                                      

                    <div id="owl-demo" class="owl-carousel">
                        <div class="bg">
                            <div class="image">
                                <img src="<?php echo $url_path ?>/images/1.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/2.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                       <div class="bg">
                            <div class="item">  
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/3.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/4.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/5.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                        <div class="bg">
                            <div class="item">  
                                <div class="image">
                                    <img src="<?php echo $url_path ?>/images/6.jpg" alt=""/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>         

