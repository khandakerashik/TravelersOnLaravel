<?php


	Route::get('/login', 'LoginController@index')->name('login.index');
    Route::post('/login', 'LoginController@verify');

    Route::get('/logout', 'LogoutController@index');


	Route::get('/registration/index', 'RegistrationController@index')->name('registration.index');
	Route::get('/registration/freaks', 'RegistrationController@freaks')->name('registration.freaks');
    Route::post('/registration/freaks', 'RegistrationController@insertFreaks');
	Route::get('/registration/agencies', 'RegistrationController@agencies')->name('registration.agencies');
    Route::post('/registration/agencies', 'RegistrationController@insertAgencies');

	
    Route::get('/home', 'HomeController@index')->name('home.index');


	Route::get('/blogs', 'BlogsController@index')->name('blogs.index');
	Route::get('/blogs/blog_details/{id}', 'BlogsController@blog_details')->name('blogs.blog_details');

	Route::get('/events', 'EventsController@index')->name('events.index');
	Route::get('/events/event_details/{id}', 'EventsController@event_details')->name('events.event_details');
	Route::get('/events/book_now/{id}', 'EventsController@book_now')->name('events.book_now');


 

    Route::group(['middleware'=>['sess']], function(){

    Route::get('/profile', 'ProfileController@index');


    Route::group(['middleware'=>['freakstype']], function(){

    Route::get('/events/book/cancel/{id}{eid}','EventsController@CancelEvent')->name('event.eventCancel');

    Route::post('/events/book_now/{id}', 'EventsController@bookEvent');

    Route::post('/blog/comment/{id}','BlogsController@insertComment')->name('blogs.comment');

    

    Route::get('/freaks/index', 'FreaksController@index')->name('freaks.index');
    
	Route::get('/freaks/index', 'FreaksController@index')->name('freaks.index');
    Route::get('/freaks/edit_profile', 'FreaksController@edit_profile')->name('freaks.edit_profile');
    Route::post('/freaks/edit_profile', 'FreaksController@updateProfile');

    Route::get('/freaks/write_blog', 'FreaksController@write_blog')->name('freaks.write_blog');
    Route::post('/freaks/write_blog', 'FreaksController@insertBlog');

    Route::get('/freaks/edit/{id}', 'FreaksController@edit')->name('freaks.edit');
    Route::post('/freaks/edit/{id}', 'FreaksController@updateBlog');

    Route::get('/freaks/edit_blog', 'FreaksController@edit_blog')->name('freaks.edit_blog');
    Route::get('/freaks/delete_blog/{id}', 'FreaksController@delete_blog')->name('freaks.delete_blog');
    Route::get('/freaks/trash', 'FreaksController@trash')->name('freaks.trash');
    Route::get('/freaks/restore/{id}', 'FreaksController@restore')->name('freaks.restore');

    Route::get('/freaks/book_events', 'FreaksController@book_events')->name('freaks.book_events');
    Route::get('/freaks/history', 'FreaksController@history')->name('freaks.history');

    Route::get('/freaks/messages', 'FreaksController@messages')->name('freaks.messages');
    
    Route::get('/freaks/messages/sent/{id}', 'FreaksController@messagesSent')->name('freaks.messages.sent');
    Route::post('/freaks/messages/sent/{id}', 'FreaksController@messagesStore');

    Route::get('/freaks/notifications', 'FreaksController@notifications')->name('freaks.notifications');
    
    Route::get('/freaks/analytics', 'FreaksController@analytics')->name('freaks.analytics');

    Route::get('/freaks/action', 'FreaksController@action')->name('freaks.action');

    Route::get('/freaks/settings', 'FreaksController@settings')->name('freaks.settings');
    Route::post('/freaks/settings', 'FreaksController@settingsSave');

    Route::get('/freaks/report', 'FreaksController@pdf')->name('freaks.report');

    });

    
    //Travel agencies

    Route::group(['middleware'=>['agenciestype']], function(){

   

    Route::get('/travel_agency/index', 'TravelAgencyController@index')->name('travel_agency.index');
    Route::get('/travel_agency/edit_profile', 'TravelAgencyController@edit_profile')->name('travel_agency.edit_profile');
    Route::post('/travel_agency/edit_profile', 'TravelAgencyController@update_profile');
    Route::get('/travel_agency/offer_events', 'TravelAgencyController@offer_events')->name('travel_agency.offer_events');
    Route::post('/travel_agency/offer_events', 'TravelAgencyController@insert_events');
    Route::get('/travel_agency/edit_events', 'TravelAgencyController@edit_events')->name('travel_agency.edit_events');
    Route::get('/travel_agency/edit/{id}', 'TravelAgencyController@edit')->name('travel_agency.edit');
    Route::post('/travel_agency/edit/{id}', 'TravelAgencyController@update_events');
    Route::get('/travel_agency/delete_events', 'TravelAgencyController@delete_events')->name('travel_agency.delete_events');
    Route::get('/travel_agency/delete/{id}', 'TravelAgencyController@delete')->name('travel_agency.delete');
    Route::post('/travel_agency/delete/{id}', 'TravelAgencyController@destroy');
    Route::get('/travel_agency/history', 'TravelAgencyController@history')->name('travel_agency.history');
    Route::get('/travel_agency/booked_events', 'TravelAgencyController@booked_events')->name('travel_agency.booked_events');
    Route::get('/travel_agency/messages', 'TravelAgencyController@messages')->name('travel_agency.messages');
    Route::get('/travel_agency/messagetoanyone/{email}', 'TravelAgencyController@messagetoanyone')->name('travel_agency.messagetoanyone');
    Route::post('/travel_agency/messagetoanyone/{email}', 'TravelAgencyController@messagestore');
    Route::get('/travel_agency/notifications', 'TravelAgencyController@notifications')->name('travel_agency.notifications');
     Route::get('/travel_agency/dashboard', 'TravelAgencyController@dashboard')->name('travel_agency.dashboard');


    });
    
    //admin

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


});