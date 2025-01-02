<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

## MENU HOME
$route['home/footwear'] = 'home/footwear';
$route['home/bags'] = 'home/bags';
$route['home/electronic'] = 'home/electronic';
$route['home/tools_parts'] = 'home/tools_parts';
$route['home/jewelry'] = 'home/jewelry';
$route['home/organic_food'] = 'home/organic_food';
$route['home/cosmetics'] = 'home/cosmetics';
$route['home/furniture'] = 'home/furniture';
$route['home/sunglasses'] = 'home/sunglasses';
$route['home/medical'] = 'home/medical';
$route['home/christmas'] = 'home/christmas';

## MENU SHOP: COLLECTION PAGE
$route['shop/collection_style1'] = 'shop/collection_style1';
$route['shop/collection_style2'] = 'shop/collection_style2';
$route['shop/collection_style3'] = 'shop/collection_style3';
$route['shop/collection_style4'] = 'shop/collection_style4';
$route['shop/sub_collection_style2'] = 'shop/sub_collection_style2';
$route['shop/collection_empty'] = 'shop/collection_empty';
$route['shop/shop_search_results'] = 'shop/shop_search_results';
$route['shop/shop_swatches_style'] = 'shop/shop_swatches_style';

## MENU SHOP: SHOP PAGE
$route['shop/shop_grid_view'] = 'shop/shop_grid_view';
$route['shop/shop_list_view'] = 'shop/shop_list_view';
$route['shop/shop_masonry_grid'] = 'shop/shop_masonry_grid';
$route['shop/shop_left_sidebar'] = 'shop/shop_left_sidebar';
$route['shop/shop_right_sidebar'] = 'shop/shop_right_sidebar';
$route['shop/shop_top_filter'] = 'shop/shop_top_filter';
$route['shop/shop_with_category'] = 'shop/shop_with_category';

## MENU SHOP: SHOP OTHER PAGE
$route['shop/cart_style1'] = 'shop/cart_style1';
$route['shop/cart_style2'] = 'shop/cart_style2';
$route['shop/checkout_style1'] = 'shop/checkout_style1';
$route['shop/checkout_style2'] = 'shop/checkout_style2';
$route['shop/compare_style1'] = 'shop/compare_style1';
$route['shop/compare_style2'] = 'shop/compare_style2';
$route['shop/order_success'] = 'shop/order_success';
$route['shop/wishlist_style1'] = 'shop/wishlist_style1';
$route['shop/wishlist_style2'] = 'shop/wishlist_style2';

## MENU PRODUCT: PRODUCT PAGE
$route['product/product_layout1'] = 'product/product_layout1';
$route['product/product_layout2'] = 'product/product_layout2';
$route['product/product_layout3'] = 'product/product_layout3';
$route['product/product_layout4'] = 'product/product_layout4';
$route['product/product_layout5'] = 'product/product_layout5';
$route['product/product_layout6'] = 'product/product_layout6';
$route['product/product_layout7'] = 'product/product_layout7';
$route['product/product_3d_ar_models'] = 'product/product_3d_ar_models';

## MENU PRODUCT: PRODUCT PAGE TYPES
$route['product/product_360_view'] = 'product/product_360_view';
$route['product/product_grouped'] = 'product/product_grouped';
$route['product/product_standard'] = 'product/product_standard';
$route['product/product_variable'] = 'product/product_variable';

## MENU BLOG
$route['blog/blog_details'] = 'blog/blog_details';
$route['blog/blog_grid_sidebar'] = 'blog/blog_grid_sidebar';
$route['blog/blog_grid'] = 'blog/blog_grid';
$route['blog/blog_list_sidebar'] = 'blog/blog_list_sidebar';
$route['blog/blog_list'] = 'blog/blog_list';
$route['blog/blog_masonry'] = 'blog/blog_masonry';

## MENU PAGES
$route['pages/brands_page'] = 'pages/brands_page';
$route['pages/cms_page'] = 'pages/cms_page';
$route['pages/coming_soon'] = 'pages/coming_soon';
$route['pages/elements_icons'] = 'pages/elements_icons';
$route['pages/error_404'] = 'pages/error_404';
$route['pages/faqs_page'] = 'pages/faqs_page';
$route['pages/portfolio_page'] = 'pages/portfolio_page';

## MENU PAGES: ABOUT US
$route['pages/aboutus_style1'] = 'pages/aboutus_style1';
$route['pages/aboutus_style2'] = 'pages/aboutus_style2';

## MENU PAGES: CONTACT US

## MENU PAGES: LOOKBOOK
$route['pages/lookbook_grid'] = 'pages/lookbook_grid';
$route['pages/lookbook_masonry'] = 'pages/lookbook_masonry';
$route['pages/lookbook_shop'] = 'pages/lookbook_shop';

## MENU PAGES: MY ACCOUNT
$route['pages/forgot_password'] = 'pages/forgot_password';
$route['auth/register'] = 'auth/register';
$route['pages/my_account'] = 'pages/my_account';
$route['auth/register'] = 'auth/register';