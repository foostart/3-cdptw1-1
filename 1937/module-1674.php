<!DOCTYPE html>
<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/1674.less', 'css/1674.css');
?>
<html lang="en">
    <head>
        <title>Module-1674</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Basic usage demo">
        <meta name="author" content="David Deutsch">
        <link href="<?php echo $url_path ?>/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/fontawesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/fontawesome.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="<?php echo $url_path ?>/css/1674.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/1674.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.js" ></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js" ></script>
        <script src="<?php echo $url_path ?>/js/owl.carousel.min.js" ></script>
    </head>
    <body>
        <?php include './module-1674-content.php'; ?>
    </body>
</html>