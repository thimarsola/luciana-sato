<?php

/**
 * CSS
 */
$homeCss = new MatthiasMullie\Minify\CSS();
$homeCss->add(dirname(__DIR__, 1) . "/assets/css/style.css");
$homeCss->minify(dirname(__DIR__, 1) . "/assets/css/style.min.css");

/**
 * 404
 */
//$errorCss = new MatthiasMullie\Minify\CSS();
//$errorCss->add(dirname(__DIR__, 1) . "/assets/css/style-error.css");
//$errorCss->minify(dirname(__DIR__, 1) . "/assets/css/style-error.min.css");

/**
 * js
 */
$homeJs = new MatthiasMullie\Minify\JS();
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/scroll.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/toggle.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.magnific-popup.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/gallery.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/owl.carousel.min.js");
$homeJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/carousel.js");
$homeJs->minify(dirname(__DIR__, 1) . "/assets/js/script-home.min.js");

/**
 * Error
 */
//$errorJs = new MatthiasMullie\Minify\JS();
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/vendors/jquery.js");
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/menu.js");
//$errorJs->add(dirname(__DIR__, 1) . "/assets/js/theme/home/sticky.js");
//$errorJs->minify(dirname(__DIR__, 1) . "/assets/js/script-error.min.js");