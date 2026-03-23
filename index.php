<?php

    $page = $_GET['page'] ?? '';

    switch ($page) {
        case '':
            include 'pages/home.php';
            break;

        case 'product':
            include 'pages/product.php';
            break;

        case 'testimonial':
            include 'pages/testimoni.php';
            break;

        default:
            include 'pages/404.php';
            break;
    }

?>