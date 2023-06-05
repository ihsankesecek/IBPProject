<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeAboutController;
use App\Http\Controllers\Admin\AdminSlideController;
use App\Http\Controllers\Admin\AdminFeatureController;
use App\Http\Controllers\Admin\AdminTestimonialController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Home\HomeBlogController;
use App\Http\Controllers\Admin\AdminPhotoController;
use App\Http\Controllers\Home\HomePhotoController;

use App\Http\Controllers\Admin\AdminVideoController;
use App\Http\Controllers\Home\HomeVideoController;

use App\Http\Controllers\Admin\AdminFaqController;
use App\Http\Controllers\Home\HomeFaqController;

use App\Http\Controllers\Admin\AdminPrivacyPolicyController;

use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminAmenityController;

use App\Http\Controllers\Admin\AdminRoomController;
use App\Http\Controllers\Home\HomeRoomController;


use App\Http\Controllers\Customer\CustomerHomeController;
use App\Http\Controllers\Customer\CustomerLoginController;
use App\Http\Controllers\Customer\CustomerProfileController;












/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/* Front */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeAboutController::class, 'index'])->name('about');
Route::get('/blog', [HomeBlogController::class, 'index'])->name('blog');
Route::get('/single-post/{id}', [HomeBlogController::class, 'single_post'])->name('single_post');
Route::get('/photo-gallery', [HomePhotoController::class, 'index'])->name('photo_gallery');
Route::get('/video-gallery', [HomeVideoController::class, 'index'])->name('video_gallery');
Route::get('/faq', [HomeFaqController::class, 'index'])->name('faq');
Route::get('/room/{id}',[HomeRoomController::class, 'single_room'])->name('room_detail');





/* Admin*/
Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');
Route::get('admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::post('admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');
Route::get('admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');
Route::post('admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');

/*Customer */
Route::get('customer/login', [CustomerLoginController::class, 'login'])->name('customer_login');
Route::post('customer/login-submit', [CustomerLoginController::class, 'login_submit'])->name('customer_login_submit');
Route::get('customer/logout', [CustomerLoginController::class, 'logout'])->name('customer_logout');
Route::get('customer/signup', [CustomerLoginController::class, 'signup'])->name('customer_signup');
Route::post('customer/signup-submit', [CustomerLoginController::class, 'signup_store'])->name('customer_signup_store');
Route::get('signup/verify/{email}/{token}', [CustomerLoginController::class, 'signup_verify'])->name('customer_signup_verify');
Route::get('customer/forget-password', [CustomerLoginController::class, 'forget_password'])->name('customer_forget_password');
Route::post('customer/forget-password-submit', [CustomerLoginController::class, 'forget_password_submit'])->name('customer_forget_password_submit');
Route::get('reset-password/{token}/{email}', [CustomerLoginController::class, 'reset_password'])->name('customer_reset_password');
Route::post('reset-password-submit', [CustomerLoginController::class, 'reset_password_submit'])->name('customer_reset_password_submit');

Route::group(['middleware' => ['customer:customer']], function(){
    Route::get('customer/home', [CustomerHomeController::class, 'index'])->name('customer_home');
    Route::get('customer/profile', [CustomerProfileController::class, 'index'])->name('customer_profile');
    Route::post('customer/customer_profile_submit', [CustomerProfileController::class, 'profile_submit'])->name('customer_profile_submit');

    

});


Route::group(['middleware' => ['admin:admin']], function(){
    Route::get('admin/profile', [AdminProfileController::class, 'index'])->name('admin_profile');
    Route::post('admin/admin_profile_submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

    
Route::get('admin/home', [AdminHomeController::class, 'index'])->name('admin_home');
Route::get('/admin/slide', [AdminSlideController::class, 'index'])->name('admin_slide_view');
Route::get('/admin/slide/add', [AdminSlideController::class, 'add'])->name('admin_slide_add');
Route::post('admin/slide/store', [AdminSlideController::class, 'store'])->name('admin_slide_store');
Route::get('/admin/slide/edit/{id}', [AdminSlideController::class, 'edit'])->name('admin_slide_edit');
Route::post('admin/slide/update/{id}', [AdminSlideController::class, 'update'])->name('admin_slide_update');
Route::get('admin/slide/delete/{id}', [AdminSlideController::class, 'delete'])->name('admin_slide_delete');

// Feature

Route::get('/admin/feature', [AdminFeatureController::class, 'index'])->name('admin_feature_view');
Route::get('/admin/feature/add', [AdminFeatureController::class, 'add'])->name('admin_feature_add');
Route::post('admin/feature/store', [AdminFeatureController::class, 'store'])->name('admin_feature_store');
Route::get('/admin/feature/edit/{id}', [AdminFeatureController::class, 'edit'])->name('admin_feature_edit');
Route::post('admin/feature/update/{id}', [AdminFeatureController::class, 'update'])->name('admin_feature_update');
Route::get('admin/feature/delete/{id}', [AdminFeatureController::class, 'delete'])->name('admin_feature_delete');

// Testimonials

Route::get('/admin/testimonials', [AdminTestimonialController::class, 'index'])->name('admin_testimonial_view');
Route::get('/admin/testimonials/add', [AdminTestimonialController::class, 'add'])->name('admin_testimonial_add');
Route::post('admin/testimonials/store', [AdminTestimonialController::class, 'store'])->name('admin_testimonial_store');
Route::get('/admin/testimonials/edit/{id}', [AdminTestimonialController::class, 'edit'])->name('admin_testimonial_edit');
Route::post('admin/testimonials/update/{id}', [AdminTestimonialController::class, 'update'])->name('admin_testimonial_update');
Route::get('admin/testimonials/delete/{id}', [AdminTestimonialController::class, 'delete'])->name('admin_testimonial_delete');

//Post

Route::get('/admin/post', [AdminPostController::class, 'index'])->name('admin_post_view');
Route::get('/admin/post/add', [AdminPostController::class, 'add'])->name('admin_post_add');
Route::post('admin/post/store', [AdminPostController::class, 'store'])->name('admin_post_store');
Route::get('/admin/post/edit/{id}', [AdminPostController::class, 'edit'])->name('admin_post_edit');
Route::post('admin/post/update/{id}', [AdminPostController::class, 'update'])->name('admin_post_update');
Route::get('admin/post/delete/{id}', [AdminPostController::class, 'delete'])->name('admin_post_delete');

//Photo Gallery

Route::get('/admin/photo', [AdminPhotoController::class, 'index'])->name('admin_photo_view');
Route::get('/admin/photo/add', [AdminPhotoController::class, 'add'])->name('admin_photo_add');
Route::post('admin/photo/store', [AdminPhotoController::class, 'store'])->name('admin_photo_store');
Route::get('/admin/photo/edit/{id}', [AdminPhotoController::class, 'edit'])->name('admin_photo_edit');
Route::post('admin/photo/update/{id}', [AdminPhotoController::class, 'update'])->name('admin_photo_update');
Route::get('admin/photo/delete/{id}', [AdminPhotoController::class, 'delete'])->name('admin_photo_delete');

//Video Gallery

Route::get('/admin/video', [AdminVideoController::class, 'index'])->name('admin_video_view');
Route::get('/admin/video/add', [AdminVideoController::class, 'add'])->name('admin_video_add');
Route::post('admin/video/store', [AdminVideoController::class, 'store'])->name('admin_video_store');
Route::get('/admin/video/edit/{id}', [AdminVideoController::class, 'edit'])->name('admin_video_edit');
Route::post('admin/video/update/{id}', [AdminVideoController::class, 'update'])->name('admin_video_update');
Route::get('admin/video/delete/{id}', [AdminVideoController::class, 'delete'])->name('admin_video_delete');

//FAQ

Route::get('/admin/faq', [AdminFaqController::class, 'index'])->name('admin_faq_view');
Route::get('/admin/faq/add', [AdminFaqController::class, 'add'])->name('admin_faq_add');
Route::post('admin/faq/store', [AdminFaqController::class, 'store'])->name('admin_faq_store');
Route::get('/admin/faq/edit/{id}', [AdminFaqController::class, 'edit'])->name('admin_faq_edit');
Route::post('admin/faq/update/{id}', [AdminFaqController::class, 'update'])->name('admin_faq_update');
Route::get('admin/faq/delete/{id}', [AdminFaqController::class, 'delete'])->name('admin_faq_delete');

//Privacy Policy

Route::get('/admin/privacy-policy', [AdminPrivacyPolicyController::class, 'index'])->name('admin_privacy_policy');
Route::get('/admin/privacy-policy/add', [AdminPrivacyPolicyController::class, 'add'])->name('admin_privacy_policy_add');
Route::post('/admin/privacy-policy/store', [AdminPrivacyPolicyController::class, 'store'])->name('admin_privacy_policy_store');

//About Page

Route::get('/admin/page/about',[AdminPageController::class,'index'])->name('admin_about_page');
Route::post('/admin/page/about/update', [AdminPageController::class, 'update'])->name('admin_page_about_update');



//Amenities

Route::get('/admin/amenity', [AdminAmenityController::class, 'index'])->name('admin_amenity_view');
Route::get('/admin/amenity/add', [AdminAmenityController::class, 'add'])->name('admin_amenity_add');
Route::post('admin/amenity/store', [AdminAmenityController::class, 'store'])->name('admin_amenity_store');
Route::get('/admin/amenity/edit/{id}', [AdminAmenityController::class, 'edit'])->name('admin_amenity_edit');
Route::post('admin/amenity/update/{id}', [AdminAmenityController::class, 'update'])->name('admin_amenity_update');
Route::get('admin/amenity/delete/{id}', [AdminAmenityController::class, 'delete'])->name('admin_amenity_delete');

//Rooms

Route::get('/admin/rooms', [AdminRoomController::class, 'index'])->name('admin_rooms_view');
Route::get('/admin/rooms/add', [AdminRoomController::class, 'add'])->name('admin_rooms_add');
Route::post('admin/rooms/store', [AdminRoomController::class, 'store'])->name('admin_rooms_store');
Route::get('/admin/rooms/edit/{id}', [AdminRoomController::class, 'edit'])->name('admin_rooms_edit');
Route::post('admin/rooms/update/{id}', [AdminRoomController::class, 'update'])->name('admin_rooms_update');
Route::get('admin/rooms/delete/{id}', [AdminRoomController::class, 'delete'])->name('admin_rooms_delete');


//Room photos
Route::get('/admin/rooms/gallery/add/', [AdminRoomController::class, 'photo_add'])->name('admin_room_photo_add');
Route::get('/admin/rooms/gallery/photos/{id}', [AdminRoomController::class, 'room_photos'])->name('admin_room_gallery');
Route::post('admin/rooms/gallery/store/{id}', [AdminRoomController::class, 'gallery_store'])->name('admin_rooms_gallery_store');


});
// Slide




