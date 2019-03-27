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
// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();

Route::get('/about', 'FrontEndController@About');

Route::get('/why-us', 'FrontEndController@Why');

Route::get('/assistance', 'FrontEndController@Assistance');

Route::get('/contact', 'FrontEndController@Contact');

Route::get('/corporatetours', 'FrontEndController@Corporatetours');

Route::get('/demo', 'FrontEndController@Demo');

Route::get('/eurail', 'FrontEndController@Eurail');

Route::get('/flight', 'FrontEndController@Flight');

Route::get('/', 'FrontEndController@Index');

Route::get('/insurance', 'FrontEndController@Insurance');

Route::get('/business', 'FrontEndController@Business');

Route::get('/tour-packages', 'FrontEndController@Tour');

Route::get('/cruise', function () {
    return view('cruises');
});

Route::get('/package/{catagory}', 'FrontEndController@PackageCatagoryList');

Route::get('/package/{additineraries}/{catagory?}', 'FrontEndController@additineraritePackage');

Route::get('/passportservices', 'FrontEndController@Passportservices');

Route::get('/getFilterData','FrontEndController@getFilterData');

Route::post('/sendMail','MailController@sendMail')->name('sendMail');





Route::get('/home','TravelController@category')->name('home');

Route::get('/itinerary','TravelController@itinerary')->name('itinerary');
Route::post('/store', 'TravelController@additinerary')->name('itinerary_insert');
Route::get('/viewitinerary/{id}', 'TravelController@viewitinerary');
Route::post('/itineraryupdate/{id}','TravelController@itineraryupdate');
Route::get('/itineraryedit/{id}', 'TravelController@itineraryedit');
Route::get('/itinerarydelete/{id}', 'TravelController@itinerarydelete');
Route::get('/report', 'TravelController@report')->name('report');
Route::delete('/imagedelete/{id}', 'TravelController@imagedelete');



Route::get('/category','TravelController@category')->name('category');
Route::post('/insert','TravelController@addcategory')->name('insert');
Route::get('/viewcategory','TravelController@viewcategory');



Route::get('/complementary','TravelController@complementary');
Route::post('/addcomplementary','TravelController@addcomplementary')->name('addcomplementary');
Route::get('/viewcomplementary','TravelController@viewcomplementary');


Route::get('/resetPassword','TravelController@resetPassword');
Route::post('/resetPassword','TravelController@PasswordUpdate');
