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




Route::group(['middleware'=>['web','auth']],function (){

	//gallery , slider 
	Route::get('/gallery','FileController@index');
	Route::get('/{news}/add/photo','FileController@add');
	Route::get('/add/news/gallery','FileController@withNews');
	Route::post('/gallery/{news}/upload','FileController@store');
	Route::get('/gallery/{gallery}/edit' ,'FileController@edit');
	Route::patch('/gallery/{news}/{gallery}/update' ,'FileController@update');
	Route::get('/gallery/{gallery}/delete' ,'FileController@delete');

	//news
	Route::get('/admin','NewsController@showNews');
	Route::get('/news/add','NewsController@addNews');
	Route::post('/news/insert','NewsController@insert');
	Route::get('/news/{news}/edit','NewsController@edit');
	Route::patch('/news/{news}/update','NewsController@update');
	Route::get('/news/{news}/delete','NewsController@delete');
	
	//========================== Category =============================

	Route::group(['middleware'=>['status']],function (){
		Route::get('/category/{catId}','CategoriesController@show');
		Route::get('/add/category','CategoriesController@create');
		Route::post('/add/store','CategoriesController@store');
		Route::get('/edit/{catId}/category','CategoriesController@edit');
		Route::patch('/update/{catId}/category','CategoriesController@update');
		Route::get('/delete/{catId}/category','CategoriesController@destroy');
		Route::get('/category','CategoriesController@showall');
		Route::get('/select','CategoriesController@select');
	
	//========================== SubCategory =============================

		Route::get('/add/{catId}/subcategory','SubCategoriesController@create');
		Route::post('/store/{catId}/subcategory','SubCategoriesController@store');
		Route::get('/edit/{catId}/subcategory','SubCategoriesController@edit');
		Route::patch('/update/{catId}/subcategory','SubCategoriesController@update');
		Route::get('/delete/{catId}/subcategory','SubCategoriesController@destroy');

		Route::get('/requests', 'MainController@showRequests');
		Route::get('/delete/{author}', 'MainController@delete');

		Route::get('/editorsInfo', function (){
		return view('adminPanel.editorsInfo');
		});
		Route::get('/insert/{author}','MainController@insert');
		Route::get('/user/delete/{user}', 'MainController@userDelete');
		Route::get('/editorsInfo', function (){
		return view('adminPanel.editorsInfo');
		});
	});
});
Route::get('/authorRegistration', function () {
    return view('registrationForm.register');});
Route::post('/authorRegistration/submitted', 'MainController@register');
Route::auth();




// website

Route::get('/','HomePageController@index');

