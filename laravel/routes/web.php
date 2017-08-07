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
    return view('news/news');
});

Route::get('get_announce/{indexnum}', function($indexnum) {
    return view('fetch_anno/fetch_anno', array('indexnum' => $indexnum));
})->where('indexnum', '[0-9]+');

/*** 公告區 ***/
Route::get('news/news', function() {
    return view('news/news');
});
Route::get('leader/news', function() {
    return view('announce_template/news', 
        array('depart' => "總務長室",
              'depart_eng' => "leader"
        ));
});
Route::get('affair/news', function() {
    return view('announce_template/news', 
        array('depart' => "事務組",
              'depart_eng' => "affair"
    ));
});
Route::get('cashier/news', function() {
    return view('announce_template/news', 
        array('depart' => "出納組", 
              'depart_eng' => "cashier"
        ));
});
Route::get('property/news', function() {
    return view('announce_template/news', 
        array('depart' => "保管組",
              'depart_eng' => "property"
        ));
});
Route::get('construction/news', function() {
    return view('announce_template/news', 
        array('depart' => "營繕組",
              'depart_eng' => "construction"
        ));
});
Route::get('security/news', function() {
    return view('announce_template/news', 
        array('depart' => "駐警隊", 
              'depart_eng' => "security"
        ));
});
Route::get('dining/news', function() {
    return view('announce_template/news', 
        array('depart' => "民服會",
              'depart_eng' => "dining"
        ));
});

/*** 總務處主 tab ***/
Route::get('news/loan', function() {
    return view('news/loan');
});


/*** 尚未開發區域 ***/
Route::get('news/{foo}', function() {
    return view('under_construction', array("depart_eng" => "news"));
});
Route::get('leader/{foo}', function() {
    return view('under_construction', array("depart_eng" => "leader"));
});
Route::get('affair/{foo}', function() {
    return view('under_construction', array("depart_eng" => "affair"));
});
Route::get('cashier/{foo}', function() {
    return view('under_construction', array("depart_eng" => "cashier"));
});
Route::get('property/{foo}', function() {
    return view('under_construction', array("depart_eng" => "property"));
});
Route::get('construction/{foo}', function() {
    return view('under_construction', array("depart_eng" => "construction"));
});
Route::get('security/{foo}', function() {
    return view('under_construction', array("depart_eng" => "security"));
});
Route::get('dining/{foo}', function() {
    return view('under_construction', array("depart_eng" => "dining"));
});
Route::get('nyan', function() {
    return view('nyan');
});
Route::get('demo_sidebar', function() {
    return view('extra_sidebar_demo');
});
