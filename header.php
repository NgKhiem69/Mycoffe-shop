<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/socbibi.css">
    <?php wp_head(); ?>
</head>

<header class="header">
    <a href="<?php echo home_url(); ?>" class="logo">coffee<i class="fas fa-mug-hot"></i></a>

    <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#menu">menu</a>
            <a href="#review">review</a>
            <a href="#book">book</a>
        </nav>

        <a href="#" class="btn">book a table</a>
</header>
