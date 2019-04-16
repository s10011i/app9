<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','TaskController@index',function(){
	return view('crud.view');
});
Route::get('/login',function(){
	return view('register.login_form');
});
Route::get('/login1','TaskController@check');

Route::get('/register',function(){
	return view('register.register_form');
});
Route::get('/register1','TaskController@register');

Route::get('/create',function(){
	return view('crud.create');
});
Route::get('/update',function(){
	return view('crud.update');
});
Route::get('/delete',function(){
	return view('crud.delete');
});
Route::get('/create1','TaskController@create'
);
Route::get('/delete1','TaskController@delete'
);
Route::get('/update1','TaskController@update'
);

// Route::get('/cont','TaskController@index');
// Route::get('contact',function(){
// 	return 'hello from contact';
// });

// Route::get('contact/member',function(){
// 	return 'hello from MEMBER';
// });

// Route::get('contact/{category}',function($category){
// 	return 'hello from '.$category.' contact';
// });

// Route::get('/',function(){
// 	return redirect('/about');
// });
// Route::get('/about',function(){
// 	return 'hi, this is from about';
// });


