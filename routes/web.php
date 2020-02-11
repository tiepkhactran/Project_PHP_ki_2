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



//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');
//


//1. BACK_END
//1.1.ĐĂNG KÝ VÀ ĐĂNG NHẬP
Route::get('/back/login', 'UserController@getLogin');
Route::post('/back/login', 'UserController@postLogin');

Route::get('/back/logout', 'UserController@getLogout');

Route::get('/back/dashboard', 'DashboardController@show');

Route::get('/back/user/error', 'UserController@userError');

//1.2 QUYEN USER
Route::group(["middleware"=>"admin.auth"],function (){
    Route::get('/back', function () {
        return view('back_end.index');
    });

//------------------------------MEMBER-------------------------
    Route::get('/back/member', 'MemberController@MemberList');

    Route::get('/back/member/search', 'MemberController@MemberSearchResult');
    Route::post('/back/member/search/', 'MemberController@MemberSearch');

//create
    Route::get('/back/member/create', 'MemberController@MemberCreate');
    Route::post('/back/member/create', 'MemberController@MemberSave');

//update
    Route::get('/back/member/edit/', 'MemberController@MemberEdit');
    Route::post('/back/member/edit/', 'MemberController@MemberUpdate');

//delete
    Route::get('/back/member/delete/{member_id}', 'MemberController@MemberDelete');



//------------------------------CAUSES-------------------------
    Route::get('/back/cause', 'CauseController@CauseList');

    Route::get('/back/cause/detail/', 'CauseController@CauseGetDetail');

//------------------------------DONATER-------------------------
    Route::get('/back/donater', 'DonaterController@DonaterList');

//create
    Route::get('/back/donater/create', 'DonaterController@DonaterCreate');
    Route::post('/back/donater/create', 'DonaterController@DonaterSave');

//update
    Route::get('/back/donater/edit/', 'DonaterController@DonaterEdit');
    Route::post('/back/donater/edit/', 'DonaterController@DonaterUpdate');

//delete
    Route::get('/back/donater/delete/{donater_id}', 'DonaterController@DonaterDelete');




});


//1.3 QUYEN ADMIN
Route::group(["middleware"=>"bossAdmin.auth"],function (){

//USER


    Route::get('/back/user', 'UserController@UserList');

    Route::get('/back/user/search', 'UserController@UserSearchResult');
    Route::post('/back/user/search/', 'UserController@UserSearch');

//create
    Route::get('/back/user/create', 'UserController@UserCreate');
    Route::post('/back/user/create', 'UserController@UserSave');
//update
    Route::get('/back/user/edit/', 'UserController@UserEdit');
    Route::post('/back/user/edit/', 'UserController@UserUpdate');
//delete
    Route::post('/back/user/delete', 'UserController@UserDelete');
});

















//2.FRONT_END
Route::get('/front', function () {
    return view('welcome');
});

//Member registration
Route::get('front/registration', 'MemberController@MemberRegisterCreate');
Route::post('front/registration', 'MemberController@MemberRegisterSave');

Route::get('front/login', 'MemberController@MemberGetLogin');
Route::post('front/login', 'MemberController@MemberPostLogin');

Route::get('front/logout', 'MemberController@MemberGetLogout');

//ABOUT PAGE
Route::get('/front/about', function (){
    return view('front_end.about');
});


Route::get('/front/shop', function (){
    return view('front_end.shop');
});
Route::get('/front/causes', function () {
    return view('front_end.causes');
});
Route::get('/front/contact', function () {
    return view('front_end.contact');
});
Route::get('/front/event', function () {
    return view('front_end.event');
});
Route::get('/front/donate', function () {
    return view('front_end.donate');
});
Route::get('/front/home', function () {
    return view('front_end.home');
});
// phần sự kiện
Route::get('/front/causes_child', function () {
    return view('front_end.Causes.causes_child');
});

Route::get('/front/causes_disabilities', function () {
    return view('front_end.Causes.causes_disabilities');
});
Route::get('/front/causes_homeless', function () {
    return view('front_end.Causes.causes_homeless');
});
Route::get('/front/causes_poor', function () {
    return view('front_end.Causes.causes_poor');
});

// font chi tiết
Route::get('/front/detail_up', function () {
    return view('front_end.detail.detail_up');
});
Route::get('/front/detail_fe', function () {
    return view('front_end.detail.detail_fe');
});


