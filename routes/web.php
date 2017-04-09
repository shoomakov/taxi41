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
  return view(
    'pages.home',
    [
      'title' => 'Сервис заказа такси | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order s-active',
      'mdriver' => 'm-driver',

      // style
      'style' => 'all.css'
    ]
  );
});

Route::get('/driver', function () {
  return view(
    'pages.driver',
    [
      'title' => 'Работа водителем | '.config('app.name'),
      'description' => 'null',

      // menu
      'morder' => 'm-order',
      'mdriver' => 'm-driver s-active',

      // style
      'style' => 'driver.css'
    ]
  );
});
