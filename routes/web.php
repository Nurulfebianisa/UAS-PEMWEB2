<?php
  
use App\Models\LoginAdmin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

  


use App\Http\Controllers\NewsController;

use App\Http\Controllers\UserController;




  
use App\Http\Controllers\AboutController;



// use App\Http\Controllers\ContactController;




use App\Http\Controllers\LoginController;

use App\Http\Controllers\ProdiController;

use App\Http\Controllers\KampusController;

use App\Http\Controllers\FacultyController;

use App\Http\Controllers\KriteriaController;

use App\Http\Controllers\DataProdiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\HalamanAdminController;



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


// Routes Admin
Route::get('/admin', [HalamanAdminController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);
Route::get('/alternatif', [DataProdiController::class, 'index']);
Route::get('/createProdi', [DataProdiController::class, 'create']);
Route::resource('/kriterias', KriteriaController::class);
Route::get('/createKriteria', [KriteriaController::class, 'create']);
Route::post('/simpanAternatif', [DataProdiController::class, 'store']);
route::get('/pengkali','PerhitunganController@pengkali');
Route::get('/normalisasi', [PerhitunganController::class, 'normalisasi']);
Route::get('/hasil', [PerhitunganController::class, 'hasil']);


//  Routes User
Route::get('University', [KampusController::class, 'campus']);
Route::get('About', [AboutController::class, 'abouts']);
Route::get('News', [NewsController::class, 'new']);
Route::get('Announcement', [AnnouncementController::class, 'announ']);
Route::get('Faculty', [FacultyController::class, 'facu']);


Route::get('/contact', function () {
    return view('kampus.contact');

});
Route::get('/Terms of Use', function () {
    return view('kampus.terms');

});
Route::get('/Privacy Policy', function () {
    return view('kampus.privacy');

});
Route::get('/DIII Kebidanan', function () {
    return view('kampus.kebidanan');

});
Route::get('/DIII Akuntansi', function () {
    return view('kampus.akuntansi');

});
Route::get('/DIII Keperawatan', function () {
    return view('kampus.keperawatan');

});
Route::get('/DIII Desain Komunikasi Visual', function () {
    return view('kampus.visual');

});
Route::get('/DIII Farmasi', function () {
    return view('kampus.farmasi');

});
Route::get('/HalamanAdmin', function () {
    return view('admin.admin');

});

// Route::get('/contact', [ContactController::class, 'cc']);

// Routes Login
Route::get('/loginadmin', function () {
    return view('admin.login');
});
// });

// Route::get('/loginadmin', [LoginController::class, 'store']);

// Route User

Route::get('/register', function () {
    return view('admin.register');

});

Route::get('/loginuser', function () {
    return view('user.login');

});



Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');



