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
        <div class="row">                                      
            <div class="owl-carousel">
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/1.jpg" alt="hinh1"/>
                </div>
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/2.jpg" alt="hinh2"/>
                </div>
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/3.jpg" alt="hinh3"/>
                </div>
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/4.jpg" alt="hinh4"/>
                </div>
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/5.jpg" alt="hinh5"/>
                </div>
                <div class="bg">
                    <img src="<?php echo $url_path ?>/images/6.jpg" alt="hinh6"/>
                </div>
            </div>
        </div>
    </div>
</div>         

