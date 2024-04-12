<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\DashboardController as dash;


use App\Http\Controllers\Settings\AdminUserController as admin;
use App\Http\Controllers\Settings\UserProfileController as userprofile;

use App\Http\Controllers\Settings\NoticeController as notice;
use App\Http\Controllers\OurMemberController as member;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\YearController as year;
use App\Http\Controllers\PhotoGallaryCategoryController as pGalleryCat;
use App\Http\Controllers\PhotoGallaryController as pGallery;
use App\Http\Controllers\VideoGalleryController as vGallery;
use App\Http\Controllers\VideoGallaryCategoryController as vGalleryCat;
use App\Http\Controllers\ScrollNoticeController as scrollN;


use App\Http\Controllers\TestController as test;
use App\Http\Controllers\FrontendController as front;
use App\Http\Controllers\AboutUsController as aboutus;
use App\Http\Controllers\MediaController as media;

use App\Http\Controllers\RoleController as role;
use App\Http\Controllers\Settings\AdminUserController as adminuser;
use App\Http\Controllers\FrontMenuController as frontMenu;

use App\Http\Controllers\PageController as page;

use App\Http\Controllers\BrandController as brand;
use App\Http\Controllers\PartnerController as partner;
use App\Http\Controllers\OurBusinessController as ourbs;
use App\Http\Controllers\BlogController as blog;
use App\Http\Controllers\AboutUsPageController as aboutpage;
use App\Http\Controllers\CareerController as career;
use App\Http\Controllers\ReportController as rep;
use App\Http\Controllers\ContactController as contact;
use App\Http\Controllers\SettingController as setting;
use App\Http\Controllers\MessageController as msg;

/* Middleware */
use App\Http\Middleware\isSuperadmin;



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
/*Test controler */
Route::get('/mail', [test::class,'index'])->name('mail');
/* === Page ==== */
Route::get('/',[front::class,'index'])->name('front');
Route::get('/overview',[front::class,'overview'])->name('overview');
Route::get('/founder-chairman',[front::class,'foundermsg'])->name('foundermsg');
Route::get('/chairperson-message',[front::class,'chairpersonMsg'])->name('chairpersonMsg');
Route::get('/managing-director-message',[front::class,'overview'])->name('managingDirMsg');
Route::get('/board-directories',[front::class,'boardDirect'])->name('boardDirect');
Route::get('/key-management',[front::class,'keyManagement'])->name('keyManagement');
Route::get('/our-mission-vission',[front::class,'msnVsn'])->name('msnVsn');
Route::get('/csr',[front::class,'csr'])->name('csr');
Route::get('/group-logo',[front::class,'groupLogo'])->name('groupLogo');

Route::get('/career', [front::class,'career'])->name('career');
Route::resource('car', career::class)->only(['store']);
Route::get('/financial-report', [front::class,'financialReport'])->name('financial_report');
Route::get('/psi-report', [front::class,'PSIReport'])->name('psi_report');
Route::get('/contact-us', [front::class,'contact'])->name('contact');
Route::resource('contact', contact::class)->only(['store']);
Route::get('/our-brands', [front::class,'brand'])->name('brand');
Route::get('/our-team', [front::class,'team'])->name('team');


Route::group(['middleware' => 'unknownUser'], function () {
    Route::get('/admin-login', [auth::class,'signInForm'])->name('signInForm');
    Route::post('/login', [auth::class,'signIn'])->name('login.check');
});

Route::get('/logout', [auth::class,'signOut'])->name('logOut');


// photo and video gallery
Route::get('photo_gallery', [media::class,'pGallery'])->name('pGallery');
Route::get('/album/{slug}', [media::class,'album'])->name('album');
Route::get('/photo/{slug}', [media::class,'photo'])->name('photo');
Route::get('video_gallery', [media::class,'vGallery'])->name('vGallery');
Route::get('/vAlbum/{slug}', [media::class,'videoAlbum'])->name('vAlbum');
Route::get('/video/{slug}', [media::class,'video'])->name('video');

Route::get('{page_slug}', [front::class,'singleBusinessPage'])->name('singleBusinessPage');

// Super Admin
Route::group(['middleware' => 'isSuperadmin'], function () {

    Route::prefix('superadmin')->group(function () {

        Route::get('/dashboard', [dash::class,'superadminDashboard'])->name('superadmin.Dashboard');

        Route::get('/profile', [userprofile::class,'profile'])->name('superadmin.profile');
        Route::post('/profile', [userprofile::class,'store'])->name('superadmin.profile.store');
        Route::get('/change_password', [userprofile::class,'change_password'])->name('superadmin.change_password');
        Route::post('/change_password', [userprofile::class,'change_password_store'])->name('superadmin.change_password.store');

       
   
        Route::resource('adminuser', adminuser::class, ["as" => "superadmin"]);
        Route::resource('role', role::class,["as" => "superadmin"]);

        Route::resource('notice', notice::class, ["as" => "superadmin"]);
        Route::resource('slider',SliderController::class,['as'=>'superadmin']);
        Route::resource('ourMember',member::class,['as'=>'superadmin']);
        Route::resource('facilities',facilities::class,['as'=>'superadmin']);
        Route::resource('year',year::class,['as'=>'superadmin']);
        Route::resource('pGalleryCat',pGalleryCat::class,['as'=>'superadmin']);
        Route::resource('pGallery',pGallery::class,['as'=>'superadmin']);
        Route::get('pGallerydelete', [pGallery::class, 'delete'])->name('superadmin.image.delete'); 

        Route::resource('vgallery',vGallery::class,['as'=>'superadmin']);
        Route::resource('vgalleryCat',vGalleryCat::class,['as'=>'superadmin']);
        Route::resource('scrollN',scrollN::class,['as'=>'superadmin']);


        Route::get('front_menu', [frontMenu::class, 'index'])->name('superadmin.front_menu.index');
        Route::post('menu_save_update/{id?}', [frontMenu::class, 'save_update'])->name('superadmin.front_menu.save');
        Route::get('front_menu/mss', [frontMenu::class, 'mss'])->name('superadmin.front_menu.mss');
        Route::get('front_menu/delete/{id}', [frontMenu::class, 'destroy'])->name('superadmin.front_menu.detroy');

       
        Route::resource('page',page::class,['as'=>'superadmin']);
        Route::resource('aboutus',aboutus::class,['as'=>'superadmin']);
        Route::resource('brand',brand::class,['as'=>'superadmin']);
        Route::resource('partner',partner::class,['as'=>'superadmin']);
        Route::resource('business',ourbs::class,['as'=>'superadmin']);
        Route::resource('blog',blog::class,['as'=>'superadmin']);
        Route::resource('aboutpage',aboutpage::class,['as'=>'superadmin']);
        Route::resource('car', career::class,['as'=>'superadmin'])->only(['index']);
        Route::resource('report', rep::class,['as'=>'superadmin']);
        Route::resource('contact', contact::class,['as'=>'superadmin']);
        Route::resource('setting', setting::class,['as'=>'superadmin']);
        Route::resource('message', msg::class,['as'=>'superadmin']);
    });

});
Route::get('/page/{slug}', [front::class,'page'])->name('front.page');
Route::post('image-upload', [page::class, 'storeImage'])->name('image.upload');
       

