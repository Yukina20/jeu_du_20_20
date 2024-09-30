<?php

ob_start();

include __DIR__.'Repository/templates/common/header.php';
$view_header = ob_get_clean();

ob_start();
include __DIR__.'/Repository/templates/common/footer.php';
$view_footer = ob_get_clean();

ob_start();
include __DIR__.'/Repository/templates/question/new_show_question.php';
$view_main = ob_get_clean();


include __DIR__.'/Repository/templates/base.php';



$cssFiles = '<link type="text/css" rel="stylesheet"
href="../assets/style.css" />';

$jsFiles = '<script src="../assets/js/alert.js"></script>';