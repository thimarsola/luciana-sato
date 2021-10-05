<!doctype html>
<html lang="<?= SITE["lang"]; ?>" itemscope itemtype="https://schema.org/Article">

<head>
    <meta charset="utf-8">

    <!--CANONICAL-->
    <link rel="canonical" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" />
    <base href="<?= get_site_url(); ?>">
    <link rel="alternate" href="<?= (is_home() ? get_site_url() : get_page_link()); ?>" hreflang="x-default" />
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->

    <title>
        <?php
        if(is_home()){
            echo SITE['name'];
        }elseif (is_category()){
            echo single_cat_title() . " - " . SITE["name"];;
        }elseif (is_404()){
            echo SITE['name'];
        }else{
            echo get_the_title() . " - " . SITE["name"];
        }
        ?>
    </title>

    <meta name="description" content="<?= SITE["desc"]; ?>">
    <meta name="keywords" content="<?= SITE["keywords"]; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- REGION -->
    <meta name="geo.region" content="<?= REGION["region"]; ?>" />
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
    <meta name="geo.position" content="<?= REGION["position"]; ?>" />
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">

    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= get_template_directory_uri(); ?>/assets/images/favicon.svg">

    <!-- OPEN GRAPH -->
    <meta property="og:locale" content="<?= SITE["locale"]; ?>"/>
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="500">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= SITE["desc"]; ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>"> <?php wp_head(); ?>

    <!-- SCHEMA.ORG -->
    <meta itemprop="name" content="<?= SITE["name"] ?>">
    <meta itemprop="description" content="<?= SITE["desc"]; ?>">
    <meta itemprop="image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta itemprop="url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="<?= DEV['domain']; ?>"/>
    <meta name="twitter:title" content="<?= SITE["name"] ?>" />
    <meta name="twitter:description" content="<?= SITE["desc"]; ?>"/>
    <meta name="twitter:image" content="<?= get_template_directory_uri() . '/assets/images/' . SITE["image"]; ?>"/>
    <meta name="twitter:url" content="<?= (is_home() ? get_site_url() : get_page_link()); ?>"/>
</head>

<body id="home" >

<?php
if (function_exists('custom_wp_body_open')) {
    wp_body_open();
}
?>

<h1 class="d-none">
    <?php
        if(is_home()){
            echo SITE['name'];
        }elseif (is_category()){
            echo single_cat_title();
        }else{
            the_title();
        }
    ?>
</h1>

<?php
if(!is_404()):
?>
<!--header-->
<?php get_template_part('template-parts/header/header', 'header'); ?>
<!--end of header-->

<!-- whatsapp -->
<?php get_template_part('template-parts/header/header', 'whatsapp'); ?>
<!-- end of whatsapp -->
<!-- main -->
<main> <?php endif ?>