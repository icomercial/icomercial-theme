<!DOCTYPE html>
<html lang="es-CL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="container">
        <div class="logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" style="color:#fff;font-size:1.5rem;font-weight:bold;">icomercial.cl</a>
        </div>
        <nav>
            <?php
            wp_nav_menu([
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => '',
            ]);
            ?>
        </nav>
    </div>
</header>
