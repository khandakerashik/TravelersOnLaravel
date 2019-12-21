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

Route::get('/', function(){

	echo "welcome";
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');
Route::get('/registration', 'RegistrationController@index')->name('registration.index');
Route::get('/registration/freaks', 'RegistrationController@freaksreg')->name('registration.freaks');
Route::post('/registration/freaks', 'RegistrationController@insertfreaks')->name('registration.insertfreaks');
Route::get('/registration/agencies', 'RegistrationController@agenciesreg')->name('registration.agencies');
Route::post('/registration/agencies', 'RegistrationController@insertagencies')->name('registration.agencies');
Route::get('/home', ['as'=>'home.index','uses'=>'HomeController@index']);
Route::get('/blogs', ['as'=>'blog.index','uses'=>'BlogController@index']);
Route::get('/events', ['as'=>'event.index','uses'=>'EventController@index']);


Route::group(['middleware'=>['sess']], function(){

	Route::group(['middleware'=>['admintype']], function(){
	 Route::get('/admin/index', 'AdminController@index')->name('admin.index');

	 Route::get('/admin/profile', 'AdminController@profile')->name('admin.profile');
	 Route::get('/admin/editprofile', 'AdminController@editprofile')->name('admin.editprofile');
	 Route::post('/admin/editprofile', 'AdminController@updateprofile')->name('admin.updateprofile');


	 Route::get('/admin/addadmin', ['as'=>'admin.addadmin','uses'=>'AdminController@addadmin']);
	 Route::post('/admin/addadmin', ['as'=>'admin.insertadmin','uses'=>'AdminController@insertadmin']);

	 Route::get('/admin/changepassword/{email}', 'AdminController@changepassword')->name('admin.changepassword');
	 Route::post('/admin/changepassword/{email}', 'AdminController@insertpassword')->name('admin.insertpassword');

	 Route::get('/admin/freakslist', 'AdminController@freakslist')->name('admin.freakslist');
	 Route::get('/search/freaks', 'AdminController@searchfreaks');

	 Route::get('/admin/agencylist', 'AdminController@agencylist')->name('admin.agencylist');
	 Route::get('/search/agencies', 'AdminController@searchagencies');

	 Route::get('/admin/pendingevents', 'AdminController@pendingevents')->name('admin.pendingevents');

	 Route::get('/admin/pendingevents/approve/{id}', 'AdminController@approveevent')->name('admin.approveevent');
	 Route::post('/admin/pendingevents/approve/{id}', 'AdminController@confirmapproveevent')->name('admin.updateeventstatus');

	 Route::get('/admin/pendingevents/delete/{id}', 'AdminController@deleteevents')->name('admin.deleteevent');
	 Route::post('/admin/pendingevents/delete/{id}', 'AdminController@confirmdeleteevent')->name('admin.deleteevent');

	 Route::get('/admin/messages', 'AdminController@messages')->name('admin.messages');

	 Route::get('/admin/messages/reply/{id}', 'AdminController@messagereplyview')->name('admin.messagereplyview');
	 Route::post('/admin/messages/reply/{id}', 'AdminController@messagereply')->name('admin.messagereply');

	 Route::get('/admin/messages/markread/{id}', 'AdminController@markreadmessage')->name('admin.markreadmessage');
	 Route::post('/admin/messages/markread/{id}', 'AdminController@updatereadstatus')->name('admin.updatereadstatus');

	 Route::get('/admin/sendmessage', 'AdminController@sendmessageview')->name('admin.sendmessageview');
	 Route::post('/admin/sendmessage', 'AdminController@sendmessage')->name('admin.sendmessage');


	 Route::get('/admin/notifications', 'AdminController@notifications')->name('admin.notifications');

	 Route::get('/admin/banfreaks/{email}', 'AdminController@banfreaksview')->name('admin.banfreaksview');
	 Route::post('/admin/banfreaks/{email}', 'AdminController@banfreaks')->name('admin.banfreaks');
	 Route::get('/admin/deletefreaks/{email}', 'AdminController@deletefreaksview')->name('admin.deletefreaksview');
	 Route::post('/admin/deletefreaks/{email}', 'AdminController@deletefreaks')->name('admin.deletefreaks');

	 Route::get('/admin/banagencies/{email}', 'AdminController@banagenciesview')->name('admin.banagenciesview');
	 Route::post('/admin/banagencies/{email}', 'AdminController@banagencies')->name('admin.banagencies');
	 Route::get('/admin/deleteagencies/{email}', 'AdminController@deleteagenciesview')->name('admin.deleteagenciesview');
	 Route::post('/admin/deleteagencies/{email}', 'AdminController@deleteagencies')->name('admin.deleteagencies');

	 Route::get('/admin/banedfreaks', 'AdminController@banedfreaksview')->name('admin.banedfreaksview');
	 Route::get('/admin/activefreaks/{email}', 'AdminController@activefreak')->name('admin.activefreak');

	 Route::get('/admin/bannedagencies', 'AdminController@banedagenciesview')->name('admin.banedagenciesview');
	 Route::get('/admin/activeagencies/{email}', 'AdminController@activeagencies')->name('admin.activeagencies');
	 Route::get('/search/bannedfreaks', 'AdminController@searchbannedfreaks');
	 Route::get('/search/bannedagencies', 'AdminController@searchbannedagencies');
	});

	Route::group(['middleware'=>['freaktype']], function(){
	 Route::get('/freaks/index', ['as'=>'freaks.index','uses'=>'FreaksController@index']);

	});

	Route::group(['middleware'=>['agencytype']], function(){
		// Route::get('/agency/index', 'AgencyController@index');
	
		});

});



