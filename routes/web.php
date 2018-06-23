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
    return view('pages.home_page');
});
Route::get('/contactus', function () {
    return view('pages.contact_us');
});
Route::get('/about', function () {
    return view('pages.about_us');
});
Route::get('/result', function () {
    return view('result');
});

Route::get('/admin_editvoter',function(){
    $appvoters = Approvedvoter::all();
return view('admin.voter')->with('appvoter');
});


Route::get('/logout','AdminController@logout')->name('logout');

Route::get('/admin_addvoter','AdminController@add_voter')->name('new_title');

Route::get('/adminsignup','AdminController@signup')->name('adminsignup');

//admin login
Route::post('/adminsignin','AdminController@signin')->name('signinadmin');

//after signin of admin
Route::get('/adminafter_signin','AdminController@aftersignin')->name('admin_after_signin');

Route::get('/createballot','AdminController@create_ballot')->name('createballot');

//edit title
Route::get('/election_edit','AdminController@edit_election')->name('edit_election');

//save edit title
Route::post('/save_edit_title/{id}','AdminController@save_edit_title')->name('save_edit_title');

//delete title
Route::get('/delete_title/{id}','AdminController@delete_title')->name('delete_title');

//delete post
Route::get('/delete_post/{id}','AdminController@delete_post')->name('delete_post');

//delete candidate
Route::get('/delete_candidate/{id}','AdminController@delete_candidate')->name('delete_candidate');

//edit post
Route::get('/edit_post/{id}','AdminController@edit_post')->name('edit_post');

//save the edit post
Route::post('/save_edit_post/{id}','AdminController@save_edit_post')->name('save_edit_post');

//edit candidate
Route::get('/edit_candidate/{id}','AdminController@edit_candidate')->name('edit_candidate');

//save edit candidate
Route::post('/save_edit_candidate/{id}','AdminController@save_edit_candidate')->name('save_edit_candidate');

//delete self register voter
Route::get('/delete_selfReg_voter/{id}','AdminController@delete_selfReg_voter')->name('delete_selfReg_voter');

Route::get('/admin_account','AdminController@myaccount')->name('admin_account');
Route::get('/new_election_title','AdminController@new_title')->name('new_election');
Route::get('/add_position','AdminController@add_position')->name('add_position');

//after signup admin
Route::post('/adminsignup1','AdminController@store')->name('post_signup');

Route::get('/admin_editvoter','AdminController@edit_voter')->name('edit_voter');

Route::get('/admin_approvevoter','AdminController@approve_voter')->name('approve_voter');

Route::get('/admin_addvoter','AdminController@add_voter')->name('add_voters');

Route::post('/add_position','AdminController@add_post');

//edit title
Route::get('/edit_title/{id}','AdminController@edit_title')->name('edit_title');

//aproving the voter request
Route::get('/approving_voter/{id}/{email}','AdminController@approving_voter')->name('approving_voter');

//edittitleform
//Route::get('/edit_title/{id}','AdminController@edit_title')->name('edit_title');

//Route::post('/voteradd','VoterController@voters')->name('voters');

//voter self registration
Route::post('/votersadd','VoterController@voters')->name('register_voter');

//admin voter registration
Route::post('/voteradd','VoterController@voters')->name('admin_voters');

Route::post('/votingtitle_add','AdminController@new_votingtitle')->name('new_votingtitle');
Route::post('/save_candidate','AdminController@save_candidate')->name('save_candidate');


Route::get('/voterlogin','VoterController@login')->name('voter_login');
Route::get('/voterregister','VoterController@register')->name('voter_register');
Route::get('/voterlogin/modal','VoterController@modal')->name('modal');
Route::get('/voter/ballotpaper','VoterController@ballotpaper')->name('ballotpaper');
Route::get('/voter/ballotpaper/success','VoterController@success')->name('voter_success');





Route::post('/adminafter_signin','AdminController@jpt')->name('jpt');






