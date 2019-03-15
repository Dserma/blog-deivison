<?php
Route::group([ 
  'prefix' => '/backend',
  'middleware' => 'web'
], function()
{

  Route::get('/', [
    'as' => 'backend.index',
    'uses' => 'Backend\AppController@index'
    ]);
    
  Route::get('/login', [
    'as' => 'backend.form',
    'uses' => 'Backend\LoginController@Form'
  ]);
      
  Route::post('/login', [
    'as' => 'backend.login',
    'uses' => 'Backend\LoginController@Index'
  ]);
    
});