<?php

// Raphaelb\ClashOfApi\ClashServiceProvider::class

// 'Clash' => Raphaelb\ClashOfApi\Facades\Clash::class

// $log = new Monolog\Logger('name');
// $log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
// $log->addWarning('Foo');
// namespace Raphaelb\ClashOfApi;

use Raphaelb\ClashOfApi\Clash;
// use Clash;

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

Route::get('/', function () {
    return view('welcome');
});

/**
* Add New Task
*/

Route::get('/clans', function () {
    // return view('welcome');

    $id = "9UCULY09";

    // $clash = new Raphaelb\ClashOfApi\Clash();
    $clash = new Clash();
    $clans = $clash->getClan($id);
    // $clans = \Clash::getClan($id);

    return view('clans', compact('clans'));

});

Route::get('/coc', function () {

    return view('coc');
});

Route::get('/clashofclans', 'Raphaelb\ClashOfApi\ClashOfClansController@index');

Route::get('/leaders', function () {
    // return view('welcome');

    $id = "9UCULY09";

    // $clash = new Raphaelb\ClashOfApi\Clash();
    $clash = new Clash();
    $leaders = $clash->getClan($id)->getLeaders();
    // $clans = \Clash::getClan($id);

    print_r($leaders);

    return view('leaders', compact('leaders'));

});



