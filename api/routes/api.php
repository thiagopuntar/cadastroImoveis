<?php

use Illuminate\Http\Request;

Route::get("imoveis", "ImovelController@index");
Route::get("imoveis/{imovel}", "ImovelController@show");
Route::post("imoveis", "ImovelController@store");
Route::patch("imoveis/{imovel}", "ImovelController@update");
