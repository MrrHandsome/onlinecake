
<?php
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminh', 'admin\IndexController@index')->name('adminh');
Route::get('/userh', 'user\IndexController@index')->name('userh');


//Admin views customers

Route::get('admin/admin_view_customer','admin\IndexController@view_customer');



//Admin Update Customers

Route::match(['get','post'],'admin/admin_update_cust/{id}','admin\IndexController@edit_data');
Route::any('admin/admin_update_customer','admin\IndexController@edit_cust_data');

//Admin Delete Customers

Route::get('admin/admin_view_customer/{id}','admin\IndexController@delete_customer');


//Admin View Cakes
Route::get('admin/admin_view_product','admin\IndexController@view_cake');

//Admin Update Cakes
Route::match(['get','post'],'admin/admin_update_cake/{cake_id}','admin\IndexController@edit_cake');
Route::any('admin/admin_update_cakes','admin\IndexController@edit_cake_data');


//Admin Delete Cakes
Route::get('admin/admin_view_product/{cake_id}','admin\IndexController@delete_cake');

//Admin Add Product
Route::post('admin/admin_add_product','admin\IndexController@add_product');

Route::get('admin/admin_add_product',function(){
    return view('admin/admin_add_product');
});

//Admin Add bulk of data through CSV
Route::post('/uploadFile','admin\IndexController@uploadFile');



//user pages
Route::any('user/cart','user\IndexController@view_cart');

Route::get('user/checkout',function(){
    return view('user/checkout');
});
Route::get('user/cp',function(){
    return view('user/cp');
});
Route::get('user/shop',function(){
    return view('user/shop');
});



Route::get('user/single_product',function(){
    return view('user/single_product');
});
Route::get('user/index',function(){
    return view('user/index');
});
Route::get('user/contact',function(){
    return view('user/contact');
});


/*Route::any('retriveimage','admin\IndexController@retrivedata');*/

Route::any('user/shop','admin\IndexController@retrivedata');

//user add to cart
Route::match(['get','post'],'user/user_add_cart/{id},{cake_id},{cake_name},{cake_type},{cake_price},{cake_image}','user\IndexController@add_cart');


Route::get('user/cart/{cake_id}','user\IndexController@remove_cart_product');

Route::post('user/cart','user\IndexController@update_cart');

Route::post('user/contact','user\IndexController@add_contact');

//admin view_response
Route::get('admin/admin_view_response','admin\IndexController@view_res');
//admin deleet response
Route::get('admin/admin_view_response/{id}','admin\IndexController@delete_res');




//export data in excel

Route::get('/download',function(){
     return Excel::download(new UsersExport,'product.csv');
});

//edit and update user profile

Route::match(['get','post'],'user/myprofile/{id}','user\IndexController@edit_data');
Route::any('user/myprofile','user\IndexController@edit_user_data');


//single product page
Route::match(['get','post'],'user/single_product/{name}','user\IndexController@single_product');

//single add cart
Route::match(['get','post'],'user/single_product/user_ac/{id},{cake_id},{cake_name},{cake_type},{cake_price},{cake_image}','user\IndexController@ac');


//process to checkout
Route::match(['get','post'],'user/checkout','user\IndexController@process');

Route::match(['get','post'],'user/cp','user\IndexController@cp');

//Change Password
Route::post('user/cp','user\IndexController@change_pass');
Route::post('user/cp','user\IndexController@change_pass');














