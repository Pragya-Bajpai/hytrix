<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminMiddleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/', function () {
    return view('home.home');
})->name('homedashboard');


/*Front Starts Here ...*/

//Route::get('homedashbord', [HomeController::class, 'dashboard'])->name('dashboard');


Route::get('/why-chooes-us', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contactstore', [HomeController::class, 'contactstore'])->name('contactstore');
Route::get('/career', [HomeController::class, 'career'])->name('career');
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/android-development', [HomeController::class, 'android'])->name('android');
Route::get('/api-integration', [HomeController::class, 'api'])->name('api');
Route::get('/digital-marketing', [HomeController::class, 'digital'])->name('digital');
Route::get('/application', [HomeController::class, 'application'])->name('application');
route::post('/appstore', [HomeController::class, 'appstore'])->name('appstore');
Route::get('/software-development', [HomeController::class, 'software'])->name('software');
Route::get('/web-development', [HomeController::class, 'web'])->name('web');
Route::get('/ecommerce-development', [HomeController::class, 'ecommerce'])->name('ecommerce');
Route::get('/web-hosting', [HomeController::class, 'webhost'])->name('webhost');
Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
Route::get('/term-and-condition', [HomeController::class, 'term_and_condition'])->name('term.condition');

Route::view('/privacy-policy', 'home.privacy-policy')->name('privacy.policy');
Route::view('/terms-conditions', 'home.termsconditions')->name('terms.conditions');


Route::group(['middleware' => 'guest'], function () {
	Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
	Route::post('/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
	Route::get('/registration', [CustomAuthController::class, 'registration'])->name('register-user');
	Route::post('/custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
});

Route::group(['middleware' => 'auth'], function () {
	//Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard')->middleware(AdminMiddleware::class);
	Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');
	Route::get('upload', [AdminController::class, 'upload'])->name('upload');
	Route::post('upload', [AdminController::class, 'uploadstore'])->name('uploadstore');
	/* Admin pannel Starts here..*/
	Route::get('admindashboard', [AdminController::class, 'admindashboard'])->name('admindashboard');
	Route::get('jobapp', [AdminController::class, 'jobapp'])->name('jobapp');
	Route::post('jobstore', [AdminController::class, 'jobstore'])->name('jobstore');
	Route::get('contactlist', [AdminController::class, 'contactlist'])->name('contactlist');
	Route::get('jobappdetail', [AdminController::class, 'jobappdetail'])->name('jobappdetail');
	Route::get('jobappdetailchange', [AdminController::class, 'jobappdetailchange'])->name('jobappdetailchange');
	Route::get('jobappdetaildelete', [AdminController::class, 'jobappdetaildelete'])->name('jobappdetaildelete');
	Route::get('jobappdetailedit/{id}', [AdminController::class, 'jobappdetailedit'])->name('jobappdetailedit');
	Route::get('jobappdetaileditstore', [AdminController::class, 'jobappdetaileditstore'])->name('jobappdetaileditstore');
	Route::post('jobappdetailupdate', [AdminController::class, 'jobappdetailupdate'])->name('jobappdetailupdate');
	Route::get('jobcontactmaildetail', [AdminController::class, 'jobcontactmaildetail'])->name('jobcontactmaildetail');
	Route::get('portfoliodetail', [AdminController::class, 'portfoliodetail'])->name('portfoliodetail');
	Route::post('portfoliostore', [AdminController::class, 'portfoliostore'])->name('portfoliostore');
	Route::get('happyclientsload', [AdminController::class, 'happyclientsload'])->name('happyclientsload');
	Route::get('portfoliodetaildelete', [AdminController::class, 'portfoliodetaildelete'])->name('portfoliodetaildelete');
	Route::get('happyclientdatashow', [AdminController::class, 'happyclientdatashow'])->name('happyclientdatashow');
    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

	Route::get('test', [HomeController::class, 'ckeditortest'])->name('ckeditortest');
	Route::post('store', [HomeController::class,'ckeditorstore'])->name('ckeditorstore');
	Route::post('upload', [HomeController::class,'ckeditorimageupload'])->name('ckeditor.upload');

 });
 Route::get('/cloud-computing', function () {
    return view('home.cloud');
})->name('cloud');
