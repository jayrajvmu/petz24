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
//About us
$routes->get('about', 'Home::about');
//Contact us
$routes->get('contact', 'Home::contact');
//FAQ
$routes->get('faq', 'Home::faq');
//Privacypolicy
$routes->get('privacypolicy', 'Home::privacypolicy');
//Experience
$routes->get('experience', 'Home::experience');
//Add Pet
$routes->get('addpet', 'Home::addpet');
//Grooming Center
$routes->get('groomingcenter', 'Home::groomingcenter');




