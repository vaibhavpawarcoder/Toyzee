<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
 $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');


//Update Product 
$routes->get('User/updateProduct/(:num)', 'ViewProduct::editProduct/$1');
$routes->post('User/productUpdate/(:num)', 'ViewProduct::updateProduct/$1');

//view Product
$routes->get('User/viewProduct/(:num)', 'ViewProduct::viewProduct/$1');


//Remove Product
$routes->get('User/removeProduct/(:num)', 'ViewProduct::removeProduct/$1');

//update Category

$routes->get('User/updateCategory/(:num)', 'Product_Category::updateCategory/$1');
$routes->post('User/Categoryup/(:num)', 'Product_Category::Categoryup/$1');

//Remove Category
$routes->get('User/removeCategory/(:num)', 'Product_Category::removeCatUp/$1');

//update Sub-Category
$routes->get('User/updatesubCategory/(:num)', 'subCategory::editSubCategory/$1');
$routes->post('User/SubCatUp/(:num)', 'subCategory::SubCatUp/$1');

//Remove Sub-Category
$routes->get('User/removeSubategory/(:num)', 'subCategory::removesubCatUp/$1');

//update Age
$routes->get('User/updateAge/(:num)', 'AgeGroup::editAgeGroup/$1');
$routes->post('User/UpAgeGroup/(:num)', 'AgeGroup::UpAgeGroup/$1');


//Remove Age
$routes->get('User/removeAge/(:num)', 'AgeGroup::removeAge/$1');

//Add Brand in store  
$routes->post('store-Brand', 'Brand::addstoreBrand');

$routes->get('up-Brand/(:num)', 'Brand::updateBrandnow/$1');


$routes->get('User/createBrand/(:num)', 'Brand::editBrand/$1');
$routes->post('User/brandUpdate/(:num)', 'Brand::updateBrand/$1');
$routes->get('User/Brandremove/(:num)', 'Brand::removeBrand/$1');

// $routes->add('Demo', 'Demo::index');


$routes->add('Two', 'Two::index');






// Login routes
$routes->group('', ['filter' => 'isLogedIn'], function ($routes) {
    $routes->get('', 'Dashboard::index');
    $routes->get('index', 'Dashboard::index');
    //Product
    $routes->get('EditProduct', 'EditProduct::index');
    $routes->get('ViewProduct', 'ViewProduct::index');
    //Category
    $routes->get('Product_Category', 'Product_Category::index');
    //sub Category
    $routes->get('SubCategory', 'subCategory::index');
    //Brand
    $routes->get('Brand', 'Brand::index');
    //Age Group
    $routes->get('AgeGroup', 'AgeGroup::index');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
