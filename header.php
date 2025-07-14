<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <h1><?php bloginfo('name'); ?></h1>
        <?php if (has_custom_logo()) {
            the_custom_logo();
        } ?>
    </div>
</header>
