<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//网站根目录，交给闭包函数
/*Route::get('/', function () {
    return view('welcome') ;
    // return ('welcome') + "你好啊，这是我第一次";
    // return "你好啊，这是我第一次";
});*/
// Route::get('view/{id}', function ($id) {
//     // return view('welcome') ;
//     // return ('welcome') + "你好啊，这是我第一次";
//     return 'msg/view';
// });
/*Route::get('/msg', function () {
    return view('welcome') ;
    // return ('welcome') + "你好啊，这是我第一次";
    // return "你好啊，这是我第一次";
});*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|*/


// Route::group(['middleware' => ['web']], function () {
    //
// });

//http请求类型路由和控制器的绑定

// Route::get('/msg', 'MsgController@index');





/**/
// Route::get('view/{id?}', 'MsgController@show');








//restful资源控制器形式绑定路由
// Route::resource('msg', 'MsgController' );

/*
Route::get('/msg', function () {
	// return view('msg');
    // return view('msg')->with('name','mabi de ');
	$data = [
		'name' => '这是谁啊',
		'age'  => 18,
		'email' => 'sssssssssssss'


	];


    return view('index', $data);
   
});



Route::get('/home', function(){
	return view('home');
});
//连接数据库
Route::get('/s', function(){
	$name = DB::connection()->getDatabaseName();
	echo $name;
});*/


// Route::get('/','MsgController@index');

Route::get('/', [

	'as' => 'index',
	'uses' => 'MsgController@index'


	]);








Route::get('/view/{id}','MsgController@view');

Route::get('/add', function(){
	return view('add');
});

// Route::get('/add','MsgController@add');
Route::post('/add', 'MsgController@add');


Route::get('/delete/{id}', 'MsgController@delete');

Route::get('/edit/{id}', 'MsgController@edit');
Route::post('/edit/{id}', 'MsgController@postEdit');