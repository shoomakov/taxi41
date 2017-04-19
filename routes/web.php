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
use App\Http\Controllers\ContactUSController;
use Illuminate\Http\Request;
Route::get('test', function() {
  DB::connection()->enableQueryLog();
  $contactus = DB::select('select migration from migrations');
  dd($contactus);
  // foreach ($contactus as $key => $value) {
  //   echo $value;
  // }

});

Route::get('/ska79sfaas12jkadskasd3x24c2f43f2', function() {
  return view(
    'temp.readme',
    [
      'title' => 'Публичная оферта | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver',
      'offerta' => 's-active',
      'contacts' => '',
      'about' => '',

      // style
      'style' => 'all.css',

      'doc' => file_get_contents('../resources/views/md/readme.md')
    ]
  );
});

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);

// Route::get('/contact-us', array(
//     'uses' => 'MailerController@request',
//     'as'   =>'contactus.store'
// ));
//
// Route::post('/contact-us', array(
//     'uses' => 'MailerController@request',
//     'as'   => 'contactus.store'
//     ));

/*
|-------------------------------------------------------------------------
| Homepage
|-------------------------------------------------------------------------
 */

Route::get('/', function () {
  return view(
    'pages.home',
    [
      'title' => 'Сервис заказа такси | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order s-active',
      'mdriver' => 'm-driver',
      'morg' => 'm-franchise',
      'offerta' => '',
      'contacts' => '',
      'about' => '',

      // style
      'style' => 'all.css',

      // city_description
      'city' => file_get_contents('../resources/views/md/city.md')
    ]
  );
});


/*
|-------------------------------------------------------------------------
| Driver
|-------------------------------------------------------------------------
 */

Route::get('/driver', function () {
  return view(
    'pages.driver',
    [
      'title' => 'Работа водителем | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver s-active',
      'morg' => 'm-franchise',
      'offerta' => '',
      'contacts' => '',
      'about' => '',

      // style
      'style' => 'driver.css',

      // city_description
      'city' => file_get_contents('../resources/views/md/city.md')

    ]
  );
});

/*
|-------------------------------------------------------------------------
| Organizaciyam
|-------------------------------------------------------------------------
 */

Route::get('/taksoparkam', function () {
  return view(
    'pages.org',
    [
      'title' => 'Для таксомоторных компаний | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver',
      'morg' => 'm-franchise s-active',
      'offerta' => '',
      'contacts' => '',
      'about' => '',

      // style
      'style' => 'driver.css',

      // city_description
      'city' => file_get_contents('../resources/views/md/city.md')

    ]
  );
});


/*
|-------------------------------------------------------------------------
| Offerta
|-------------------------------------------------------------------------
 */

Route::get('/offerta', function () {
  return view(
    'pages.offerta',
    [
      'title' => 'Публичная оферта | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver',
      'offerta' => 's-active',
      'morg' => 'm-franchise',
      'contacts' => '',
      'about' => '',

      // style
      'style' => 'all.css',

      'doc' => file_get_contents('../resources/views/md/offerta.md')
    ]
  );
});


/*
|-------------------------------------------------------------------------
| Contacts
|-------------------------------------------------------------------------
 */

Route::get('/contacts', function () {
  return view(
    'pages.contacts',
    [
      'title' => 'Контакты | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver',
      'offerta' => '',
      'morg' => 'm-franchise',
      'contacts' => 's-active',
      'about' => '',

      // style
      'style' => 'all.css'
    ]
  );
});


/*
|-------------------------------------------------------------------------
| About
|-------------------------------------------------------------------------
 */

Route::get('/about', function () {
  return view(
    'pages.about',
    [
      'title' => 'О Компании | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver',
      'offerta' => '',
      'morg' => 'm-franchise',
      'contacts' => '',
      'about' => 's-active',

      // style
      'style' => 'all.css'
    ]
  );
});
