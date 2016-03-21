<?php

Route::group(['middleware' => 'web', 'prefix' => 'opportunity', 'namespace' => 'Modules\Opportunity\Http\Controllers'], function()
{
	Route::get('/', 'OpportunityController@index');
});