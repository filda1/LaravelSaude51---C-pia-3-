<?php


if (version_compare(PHP_VERSION, '7.2.0', '>=')) {

    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

use App\Prestador;
use App\User;
use Illuminate\Support\Facades\Input;

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

Route::get('/','WelcomeController@index')->name('welcome');

Route::resource('aderir','User\Aderir_cartaoController');

// Email related routes
Route::get('mail/home', 'MailController@home');
Route::post('mail/send', 'MailController@send');

Route::get('mail2/home2', 'Mail2Controller@home');
Route::post('mail2/send2', 'Mail2Controller@send');


// BUSCADOR DE DIRECTORIOS DE PRESTADORES

Route::any ( '/search', function () {

    $especialidade = Input::get ( 'especialidade' );
    $nome = Input::get ( 'nome' );
    $localidade = Input::get ( 'localidade' );
    $concelho = Input::get ( 'concelho' );
    $distrito = Input::get ( 'distrito' );
    
    
    $user = prestador::where ( 'nome', 'LIKE', '%' . "cepros". '%' )
                      ->Where ( 'localidade', 'LIKE', '%' . $localidade . '%' )
                      ->Where ( 'concelho', 'LIKE', '%' . $concelho . '%' )
                      ->Where ( 'distrito', 'LIKE', '%' . $distrito . '%' )
                      ->Where ( 'especialidade', 'LIKE', '%' . $especialidade . '%' )      
                      ->get ();


    if (count ( $user ) > 0)
        return view ( 'user.directorio' )->withDetails ( $user )->withQuery ( $nome );
    else
        return view ( 'user.directorio' )->withMessage ( 'No Details found. Try to search again !' );

        return view ( 'user.directorio' )->withMessage ( 'No Details found. Try to search again !' );
} );




Route::get('modal', function () {
   return view('modal');
});

/*
Route::get('promocoes', function () {
    return view('promocoes');
});*/

//Route::get('modal2', function () {
   // return view('user.pages.prestador');
//});


//Verificacion

Route::get("pesquisar/search", "Prestador1Controller@search");

Route::get('pesquisar/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
	$search = urlencode(e(Input::get('search')));
    $route = "pesquisar/search/$search";
    return redirect($route);
});


// Verificacion de cartao saude

Route::get("procurar/search/{search}", "ProcurarController@search");
Route::get('procurar/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "procurar/search/$search";
    return redirect($route);
});

Route::get("procurar/search/{search}", "ProcurarController@search");



Auth::routes();


// USER 

//Route::get('/','HomeController@index');
Route::get('post','User\PostController@post')->name('post');



Route::get('download', 'DowloadController@download');



Route::get('/prestador', function () {
    return view('user/pages/prestador');
});

//USERS
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::resource('compra2','User\Compra2Controller');    // Dowload de user normal




// ADMIN
// Post Routes

Route::get('admin/home','Admin\HomeController@index')->name('admin.home');
    Route::resource('/admin/post','Admin\PostController');



Route::resource('user/person','User\PersonController');

//Admin Routes
Route::group(['namespace' => 'Admin'],function(){
	Route::get('admin/home','HomeController@index')->name('admin.home');
	// Users Routes
	Route::resource('admin/user','UserController');
	// Roles Routes
	Route::resource('admin/role','RoleController');
	// Permission Routes
	Route::resource('admin/permission','PermissionController');
	// Post Routes
	Route::resource('admin/post','PostController');
	// Tag Routes
	Route::resource('admin/page_body','Page_bodyController');

	Route::resource('admin/prestador','PrestadorController');
	
	Route::resource('admin/user','UserController');

	Route::resource('admin/compra','CompraController');

	// Category Routes
	Route::resource('admin/category','CategoryController');
	// Admin Auth Routes
	Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
	Route::post('admin/login', 'Auth\LoginController@login');
});




Route::get('/home', 'HomeController@index')->name('home');     // login User




//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::prefix('admin')->group(function() {

    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
  
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  
  
  
    // Password reset routes
  
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  
  });