<?php



Route::get('/','Frontend\HomeController@index');
//auth & user
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/password-change', 'HomeController@changePassword')->name('password.change');
Route::post('/password-update', 'HomeController@updatePassword')->name('password.update');
Route::get('/user/logout', 'HomeController@Logout')->name('user.logout');

//admin=======
Route::get('admin/home', 'AdminController@index');
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');
        // Password Reset Routes...
Route::get('admin/password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin/reset/password/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin/update/reset', 'Admin\ResetPasswordController@reset')->name('admin.reset.update');
Route::get('/admin/Change/Password','AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update','AdminController@Update_pass')->name('admin.password.update'); 
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


	//admin section-------------
//category----------
Route::get('/admin/category','Admin\Category\CategoryController@index')->name('admin.categories');
Route::post('/admin/category','Admin\Category\CategoryController@store')->name('category.store');
Route::post('/admin/category/update','Admin\Category\CategoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}','Admin\Category\CategoryController@delete')->name('category.delete');

//brand----------

Route::get('/admin/brand','Admin\Brand\BrandController@index')->name('admin.brands');
Route::post('/admin/brand','Admin\Brand\BrandController@store')->name('brand.store');
Route::post('/admin/brand/update','Admin\Brand\BrandController@update')->name('brand.update');
Route::get('/admin/brand/delete/{id}','Admin\Brand\BrandController@delete')->name('brand.delete');

//category----------
Route::get('/admin/subcategory','Admin\Category\SubCategoryController@index')->name('admin.subcategories');
Route::post('/admin/subcategory','Admin\Category\SubCategoryController@store')->name('subcategory.store');
Route::post('/admin/subcategory/update','Admin\Category\SubCategoryController@update')->name('subcategory.update');
Route::get('/admin/subcategory/delete/{id}','Admin\Category\SubCategoryController@delete')->name('subcategory.delete');

//coupon----------
Route::get('/admin/coupon','Admin\CouponController@index')->name('admin.coupons');
Route::post('/admin/coupon','Admin\CouponController@store')->name('coupon.store');
Route::post('/admin/coupon/update','Admin\CouponController@update')->name('coupon.update');
Route::get('/admin/coupon/delete/{id}','Admin\CouponController@delete')->name('coupon.delete');

//newsletter----------
Route::get('/admin/newsletter','Admin\NewslatterController@newsletter')->name('admin.newsletter');
Route::get('/admin/newsletter/delete/{id}','Admin\NewslatterController@delete')->name('newsletter.delete');







	//Frontend Section

//newslatters
Route::post('/newslatters/store','Admin\NewslatterController@store')->name('newslatter.store');