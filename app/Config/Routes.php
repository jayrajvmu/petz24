<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'BaseAction::index');

/*====[ Product Module ]=====*/
// $routes->get('product', 'BaseAction::product');
// $routes->get('product/(:any)', 'BaseAction::product/$1');
$routes->get('product/(:any)/(:any)/(:any)', 'BaseAction::product/$1/$2/$3');
$routes->get('product-description', 'BaseAction::productDescription');
//Profile
$routes->get('profile', 'BaseAction::profile');
//Cart
$routes->get('cart', 'BaseAction::cart');
//Wishlist
$routes->get('wishlist', 'BaseAction::wishlist');
// pet grooming
$routes->get('petgrooming', 'BaseAction::petgrooming');

//order
$routes->get('order', 'BaseAction::order');
//checkout
$routes->get('checkout', 'BaseAction::checkout');
//About us
$routes->get('about', 'BaseAction::about');
//Contact us
$routes->get('contact', 'BaseAction::contact');
//FAQ
$routes->get('faq', 'BaseAction::faq');
//Privacypolicy
$routes->get('privacypolicy', 'BaseAction::privacypolicy');
//Experience
$routes->get('experience', 'BaseAction::experience');
//Add Pet
$routes->get('addpet', 'BaseAction::addpet');
//Grooming Center
$routes->get('groomingcenter', 'BaseAction::groomingcenter');
// Consultation Center
$routes->get('consultationcenter', 'BaseAction::consultationcenter');

###########################[ API Routes ]##################################
# User Signin
$routes->post('signinuser', 'Workflow_User::signinUser');

# User Signup
$routes->post('insertuser', 'Workflow_User::signupUser');



# product route AJAX

# Pet
$routes->get('getproduct', 'Workflow_Product::getProduct');
$routes->post('getspecificproduct', 'Workflow_Product::getSpecificProduct');
// $routes->post('insertpet', 'Workflow_Pet::insertPet');
// $routes->post('updatepet', 'Workflow_Pet::updatePet');
// $routes->post('deletepet', 'Workflow_Pet::deletePet');

