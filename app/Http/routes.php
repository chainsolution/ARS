<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'System@checkSession');
Route::get('Login', 'System@checkSession');
Route::post('Login', 'LoginController@UserAuthentication');
Route::get('/Menu','LoginController@Menu');
Route::get('Logout','System@Logout');
Route::get('Registration','PostsController@posts');
Route::get('ApplicationSearch', function() {
  session_start();
  if(empty($_SESSION['username']))
      return redirect('/');
  else
      return view ('ApplicationSearch');
});
Route::get('ContactAdmin',function(){
  return view ('ContactAdmin');
});
Route::post('ContactAdmin','System@sendmail');
Route::get('/RequestSearch','System@RequestSearch');
Route::post('PersonalForm','FormController@PersonalForm');
Route::post('RequestCSV/{bukken_name}/{room_no}/{to_period}/{from_period}','System@downloadcsv');
Route::post('CoperationForm','FormController@CoperationForm');
Route::get('Error',function(){
  return view('Error');
});
Route::get('Modify/{id}','FormController@GetIdOfAppHeader');
Route::get('/ReviewResult/{id}/{route}','System@ReviewResult');
Route::post('/PersonalFormModification/{id}','ModificationForm@PersonalM');
Route::post('/CorperationFormModifcation/{id}','ModificationForm@CorperationM');
Route::get('/PersonalForm', function() {
  return view('RegistrationFinal2');
});
Route::get('/CoperationForm', function() {
  return view('RegistrationFinal2');
});
