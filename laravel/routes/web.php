<?php
Route::get('', [
	'uses' =>'HomeController@index',
	'as' => 'home'
	]);

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
/*Route::group(['middleware' => ['web']], function(){

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('/signup', [
	'uses' =>'UserController@postSignUp',
	'as' => 'signup'
	]);
Route::post('/signin', [
	'uses' =>'UserController@postSignIn',
	'as' => 'signin'
	]);
Route::get('/dashboard', [
	'uses' =>'PostController@getDashboard',
	'as' => 'dashboard'
	]);
Route::get('/login', [
	'uses' =>'UserController@create',
	'as' => 'login'
	]);
Route::post('/createpost', [
	'uses' =>'PostController@postCreatePost',
	'as' => 'post.create'
	]);

Route::get('/delete-post/{post_id}', [
	'uses' =>'PostController@getDeletePost',
	'as' => 'post.delete'
	
	]);
Route::get('/logout', [
	'uses' =>'UserController@getLogout',
	'as' => 'logout'
	]);


});
Route::get('/delete/{id}', 'CommentController@delete');
Route::get('/delete/{id}','PostController@getDeletePost');
  Route::post('/comment','CommentController@index');

//Route::get('login', function () {
    //return view('login');
//});
  Route::post('posts','PostController@create');
   Route::get('post/{id}','PostController@show');


  // Route::post('posts','PostController@index');
  // Route::get('post/{id}','PostController@showPost');


 
Route::get('/register', 'RegistrationController@create');
Route::post('store', 'RegistrationController@store');
Route::get('/login', 'LoginController@create');
Route::post('/login', 'LoginController@login');*/


 


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
