<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Routes for Categories
Route::get('/categories',  'CategoryController@index');
Route::get('/categories/create',  'CategoryController@create');
Route::post('/categories',  'CategoryController@store');
Route::get('/categories/edit/{id}',  'CategoryController@edit');
Route::patch('/categories/{id}',  'CategoryController@update');
Route::get('/categories/delete/{id}',  'CategoryController@destroy');
Auth::routes();

//Routes for Products
Route::get('/products',  'ProductController@index');
Route::get('/products/create',  'ProductController@create');
Route::post('/products',  'ProductController@store');
Route::get('/products/edit/{id}',  'ProductController@edit');
Route::patch('/products/{id}',  'ProductController@update');
Route::get('/products/delete/{id}',  'ProductController@destroy');
Auth::routes();

//Routes for Features
Route::get('/features',  'FeatureController@index');
Route::get('/features/create',  'FeatureController@create');
Route::post('/features',  'FeatureController@store');
Route::get('/features/edit/{id}',  'FeatureController@edit');
Route::patch('/features/{id}',  'FeatureController@update');
Route::get('/features/delete/{id}',  'FeatureController@destroy');
Auth::routes();


//Routes for FeatureVariations
Route::get('/featureVariations',  'FeatureVariationController@index');
Route::get('/featureVariations/create/{id}',  'FeatureVariationController@create');
Route::post('/featureVariations',  'FeatureVariationController@store');
Route::get('/featureVariations/edit/{id}',  'FeatureVariationController@edit');
Route::patch('/featureVariations/{id}',  'FeatureVariationController@update');
Route::get('/featureVariations/delete/{id}',  'FeatureVariationController@destroy');
Auth::routes();

//route for productfeatures
Route::get('productfeatures/index/{id} ',  'ProductFeatureController@index');
Route::get('/productfeatures/create',  'ProductFeatureController@create');
Route::post('/productfeatures',  'ProductFeatureController@store');
Route::get('/productfeatures/edit/{id}',  'ProductFeatureController@edit');
Route::patch('/productfeatures/{id}',  'ProductFeatureController@update');
Route::get('/productfeatures/delete/{id}',  'ProductFeatureController@destroy');
Auth::routes();

Route::get('/buyerproducts',  'BuyProductController@index');
Route::get('/buyershow/{id}',  'BuyProductController@show');
Auth::routes();
//cart
Route::get('/carts',  'CartController@index');
Route::post('/carts/add',  'CartController@store');
Route::get('/carts/delete/{id}',  'CartController@destroy');
Auth::routes();
//orders 
Route::get('users/orders',  'OrderController@index');
Route::get('/orders',  'OrderController@index');
Route::post('/orders',  'OrderController@store');
Route::get('/orders/delete/{id}',  'OrderController@destroy');
Auth::routes();
//order sellers
Route::get('/ordershow/{id}',  'OrderSellerController@show');
Route::get('/orders',  'OrderSellerController@index');
Route::patch('/orders/{id}',  'OrderSellerController@update');
Auth::routes();

//Routes for users crud
Route::get('/users',  'UserController@index');
Route::get('/users/create',  'UserController@create');
Route::post('/users',  'UserController@store');
Route::get('/users/edit/{id}',  'UserController@edit');
Route::patch('/users/{id}',  'UserController@update');
Route::get('/users/delete/{id}',  'UserController@destroy');
Auth::routes();

//Routes for multi user authentication
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
	Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');	
});
Route::group(['middleware' => 'App\Http\Middleware\BuyerMiddleware'], function()
{
	Route::match(['get', 'post'], '/buyerOnlyPage/', 'HomeController@buyer');
});
Route::group(['middleware' => 'App\Http\Middleware\SellerMiddleware'], function()
{
	Route::match(['get', 'post'], '/sellerOnlyPage/', 'HomeController@seller');	
});