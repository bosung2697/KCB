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
//*/
//Route::get('/',function(){
//    return view('welcome')->with('name', 'Foo');
//});
//Route::get('/home', function(){
//    return redirect(route('home'));
//});
//Route::get('/welcome',function(){
//    return view( 'welcome');
//});
//Route::pattern('foo', '[0-9a-zA-Z]{5}');
//Route::get('/{foo?}', function($foo='bar'){
//    return $foo;
//});
//
//Route::get('/app', function () {
//    return view('app');
////});
//Route::get('/',function(){
//    return view('welcome')->with([
//        'name'=>'Foo',
//        'greeting'=>'안녕하세요?',
//    ]);
////});
//Route::get('/',function(){
//    return view('welcome');
//});
Route::get('/','WelcomeController@index');
Route::get('auth/login',function(){
    $credentials=[
        'email'=>'john@example.com',
        'password'=>'password'
    ];
    if(!auth()->attempt($credentials)){
        return 'Identification Incorrect';
    }
    return redirect('protected');
});
Route::get('protected',['middleware'=>'auth', function(){
    dump(session()->all());
    if(!auth()->check()){
        return 'Authentication required';
    }
    return 'Welcome '.auth()->user()->name;
}]);
Route::get('auth/logout',function(){
    auth()->logout();
    return 'Logged Out';
});
Route::get('/master',function(){
    return view('/layouts/master');
});
Route::resource('articles', 'ArticlesController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//DB::listen(function($query){
//    var_dump($query->sql);
//});
Event::listen('article.created', function ($article){
    var_dump('이벤트를 받았습니다. 받은 데이터(상태)는 다음과 같습니다.');
    var_dump($article->toArray());
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

