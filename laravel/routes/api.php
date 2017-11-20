<?php

use Illuminate\Http\Request;

//Route::post('/signup','UserController@postSignup');
	
	
//Route::post('/signin','UserController@postSignIn');
	
//Route::get('/dashboard', 'UserController@getDashboard');
	
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
//Route::group(['middleware' => ['api']], function(){

//Route::get('/', function () {
    //return view('welcome');
//});


//Route::get('/dashboard', [
	//'uses' =>'PostController@getDashboard',
	//'as' => 'dashboard'
	//]);
//Route::get('/login', [
	//'uses' =>'UserController@create',
	//'as' => 'login'
	//]);
//Route::post('/createpost', [
	//'uses' =>'PostController@postCreatePost',
	//'as' => 'post.create'
	//]);

//Route::get('/delete-post/{post_id}', [
	//'uses' =>'PostController@getDeletePost',
	//'as' => 'post.delete'
	//]);


//});
//Route::get('posts/create', 'PostController@create');
//Route::get('register', 'RegisterController@register');
//Route::get('login', 'LoginController@login');
   //Route::get('posts','PostController@postCreatePost');
   // Route::get('post/{id}','PostController@show');
//Route::get('/register', 'RegistrationController@create');
//Route::post('store', 'RegistrationController@store');

//Route::get('/login', 'LoginController@create');
//Route::post('/login', 'LoginController@login');
//Route::get('/loginme', 'SessionsController@create');
//Route::post('/login', 'SessionsController@store');
//Route::get('/logout', 'SessionsController@destroy');

//Route::get('/loginme', function () {
   // echo "ya its working";
//});





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Route::post('store', 'RegistrationController@store');
//Route::get('store', 'RegistrationController@register');
Route::get('/register', 'RegistrationController@create');
Route::post('store', 'RegistrationController@store');
Route::get('store', 'RegistrationController@store');

Route::get('/login', 'LoginController@create');
Route::post('login', 'LoginController@login');
Route::get('login', 'LoginController@login');


Route::get('/dashboard', [
	'uses' =>'PostController@getDashboard',
	'as' => 'dashboard'
	]);
Route::post('/createpost', [
	'uses' =>'PostController@postCreatePost',
	'as' => 'post.create'
	]);

Route::get('/delete-post/{post_id}', [
	'uses' =>'PostController@getDeletePost',
	'as' => 'post.delete'
	
	]);
Route::post('/delete-post/{post_id}', [
	'uses' =>'PostController@getDeletePost',
	'as' => 'post.delete'
	
	]);

//Route::get('/delete/{id}','PostController@getDeletePost');
//Route::get('/comment','CommentController@index');

Route::get('/comment', [
	'uses' =>'CommentController@index',
	'as' => 'comment'
	]);


//Route::post('/register', 'RegisterController@register');

Route::get('', [
	'uses' =>'HomeController@index',
	'as' => 'home'
	]);