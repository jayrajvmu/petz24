<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


//productpage
$routes->get('product', 'Home::product');
//product description
$routes->get('product-description', 'Home::productDescription');
//Profile
$routes->get('profile', 'Home::profile');
//Cart
$routes->get('cart', 'Home::cart');
//Wishlist
$routes->get('wishlist', 'Home::wishlist');
//order
$routes->get('order', 'Home::order');
//checkout
$routes->get('checkout', 'Home::checkout');
//About ius
$routes->get('about', 'Home::about');



