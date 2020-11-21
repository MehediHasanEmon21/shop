<?php



Route::get('/', 'Frontend\HomeController@index')->name('index');
//auth & user
Auth::routes(['verify' => true]);
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
Route::get('/admin/Change/Password', 'AdminController@ChangePassword')->name('admin.password.change');
Route::post('/admin/password/update', 'AdminController@Update_pass')->name('admin.password.update');
Route::get('admin/logout', 'AdminController@logout')->name('admin.logout');


//admin section-------------
//category----------
Route::get('/admin/category', 'Admin\Category\CategoryController@index')->name('admin.categories');
Route::post('/admin/category', 'Admin\Category\CategoryController@store')->name('category.store');
Route::post('/admin/category/update', 'Admin\Category\CategoryController@update')->name('category.update');
Route::get('/admin/category/delete/{id}', 'Admin\Category\CategoryController@delete')->name('category.delete');

//brand----------

Route::get('/admin/brand', 'Admin\Brand\BrandController@index')->name('admin.brands');
Route::post('/admin/brand', 'Admin\Brand\BrandController@store')->name('brand.store');
Route::post('/admin/brand/update', 'Admin\Brand\BrandController@update')->name('brand.update');
Route::get('/admin/brand/delete/{id}', 'Admin\Brand\BrandController@delete')->name('brand.delete');

//category----------
Route::get('/admin/subcategory', 'Admin\Category\SubCategoryController@index')->name('admin.subcategories');
Route::post('/admin/subcategory', 'Admin\Category\SubCategoryController@store')->name('subcategory.store');
Route::post('/admin/subcategory/update', 'Admin\Category\SubCategoryController@update')->name('subcategory.update');
Route::get('/admin/subcategory/delete/{id}', 'Admin\Category\SubCategoryController@delete')->name('subcategory.delete');

//coupon----------
Route::get('/admin/coupon', 'Admin\CouponController@index')->name('admin.coupons');
Route::post('/admin/coupon', 'Admin\CouponController@store')->name('coupon.store');
Route::post('/admin/coupon/update', 'Admin\CouponController@update')->name('coupon.update');
Route::get('/admin/coupon/delete/{id}', 'Admin\CouponController@delete')->name('coupon.delete');

//newsletter----------
Route::get('/admin/newsletter', 'Admin\NewslatterController@newsletter')->name('admin.newsletter');
Route::get('/admin/newsletter/delete/{id}', 'Admin\NewslatterController@delete')->name('newsletter.delete');

//product
Route::get('/admin/products', 'Admin\ProductController@index')->name('admin.product');
Route::get('/admin/product/create', 'Admin\ProductController@create')->name('admin.product.create');
Route::post('/admin/product/store', 'Admin\ProductController@store')->name('product.store');
Route::get('active/product/{id}', 'Admin\ProductController@active_product');
Route::get('inactive/product/{id}', 'Admin\ProductController@deactive_product');
Route::get('delete/product/{id}', 'Admin\ProductController@delete');
Route::get('edit/product/{id}', 'Admin\ProductController@edit');
Route::post('update/product/{id}', 'Admin\ProductController@update')->name('admin.product.update');
Route::post('update/product/image/{id}', 'Admin\ProductController@update_image')->name('product.image.update');
//get subcategory
Route::get('/get/subcategory/{category_id}', 'Admin\ProductController@getSubcategory');

//blog routes
Route::get('admin/add/post', 'Admin\PostController@create')->name('add.blogpost');
Route::post('admin/store/post', 'Admin\PostController@store')->name('store.post');
Route::get('admin/all/post', 'Admin\PostController@index')->name('all.blogpost');
Route::get('delete/post/{id}', 'Admin\PostController@destroy');
Route::get('edit/post/{id}', 'Admin\PostController@edit');
Route::post('update/post/{id}', 'Admin\PostController@update');

////oreder routes
Route::get('admin/pending/order', 'Admin\OrderController@pending')->name('pending.order');
Route::get('admin/accept/order', 'Admin\OrderController@accept')->name('pending.accept');
Route::get('admin/progress/order', 'Admin\OrderController@progress')->name('pending.progress');
Route::get('admin/delivered/order', 'Admin\OrderController@delivered')->name('pending.delivered');
Route::get('admin/cancel/order', 'Admin\OrderController@cancel')->name('pending.cancel');



Route::get('admin/order/detail/{id}', 'Admin\OrderController@detail')->name('order.detail');
Route::get('admin/order/confirm/{id}', 'Admin\OrderController@confirmOrder')->name('order.confirm');
Route::get('admin/order/progress/{id}', 'Admin\OrderController@orderProgress')->name('order.progress.delivery');
Route::get('admin/order/delivered/{id}', 'Admin\OrderController@orderDeliveredrder')->name('order.delivered');
Route::get('admin/order/cancel/{id}', 'Admin\OrderController@cancelOrder')->name('order.cancel');

//seo setting
Route::get('admin/seo', 'Admin\CouponController@Seo')->name('admin.seo');
Route::post('admin/update/seo', 'Admin\CouponController@UpdateSeo')->name('update.seo');

//return products admin panel
 Route::get('admin/return/request', 'Admin\ReturnController@request')->name('admin.return.request');
 Route::get('/admin/approve/return/{id}', 'Admin\ReturnController@ApproveReturn');
 Route::get('admin/all/return', 'Admin\ReturnController@AllReturn')->name('admin.all.return');


  //orders routes
Route::get('admin/today/order', 'Admin\ReportController@TodayOrder')->name('today.order');
Route::get('admin/today/deleverd', 'Admin\ReportController@TodayDelevered')->name('today.delevered');
Route::get('admin/this/month', 'Admin\ReportController@ThisMonth')->name('this.month');
Route::get('admin/search/report', 'Admin\ReportController@search')->name('search.report');
Route::post('admin/search/byyear', 'Admin\ReportController@searchByYear')->name('search.by.year');
Route::post('admin/search/bymonth', 'Admin\ReportController@searchByMonth')->name('search.by.month');
Route::post('admin/search/bydate', 'Admin\ReportController@searchByDate')->name('search.by.date');

//user role
Route::get('admin/create/role', 'Admin\ReportController@UserRole')->name('create.user.role');
Route::get('admin/create/admin', 'Admin\ReportController@UserCreate')->name('create.admin');
Route::post('admin/store/admin', 'Admin\ReportController@UserStore')->name('store.admin');
Route::get('delete/admin/{id}', 'Admin\ReportController@UserDelete');
Route::get('edit/admin/{id}', 'Admin\ReportController@UserEdit');
Route::post('admin/update/admin', 'Admin\ReportController@UserUpdate')->name('update.admin');

//site setting
Route::get('admin/site/setting', 'Admin\SettingController@SiteSetting')->name('admin.site.setting');
Route::post('admin/update/sitesetting', 'Admin\SettingController@UpdateSetting')->name('update.sitesetting');

//stock
Route::get('admin/product/stock', 'Admin\ReturnController@Stock')->name('admin.product.stock');






View::composer('layouts.include.left_sidebar', function ($view) {
    $categories = DB::table('categories')->get();
    foreach ($categories as $key => $category) {

        $subcategories = DB::table('sub_categories')->where('category_id', $category->id)->get();
        $category->subcategories = $subcategories;
    }
    $view->with('categories', $categories);
});

View::composer('layouts.include.banner', function ($view) {
    $product = DB::table('products')->where('main_slider', 1)->orderBy('id', 'DESC')->first();
    $view->with('product', $product);
});















//Frontend Section

//newslatters
Route::post('/newslatters/store', 'Admin\NewslatterController@store')->name('newslatter.store');


//cat routes
Route::get('/check', 'Frontend\CartController@allCart')->name('all.cart');

//google login
Route::get('/auth/redirect/{provider}', 'SocialController@redirect');
Route::get('/callback/{provider}', 'SocialController@callback');

//product routes
Route::get('/product/{slug}', 'Frontend\ProductController@show_product')->name('product.details');
Route::post('/cart/product/add/{id}', 'Frontend\ProductController@AddCart');
Route::get('/category/{slug}', 'Frontend\ProductController@categoryProduct');
Route::get('/subcategory/{slug}', 'Frontend\ProductController@subCategoryProduct');

//cart routes
Route::get('/show-cart', 'Frontend\CartController@show_cart')->name('show.cart');
Route::post('insert/into/cart/', 'Frontend\CartController@InsertCart')->name('insert.into.cart');
Route::post('update/cart', 'Frontend\CartController@updatetCart')->name('update.cartitem');
Route::get('delete/cart/{rowId}', 'Frontend\CartController@deleteCart')->name('cart.delete');
Route::get('checkout', 'Frontend\CartController@show_checkout')->name('user.checkout');
Route::post('apply/coupon', 'Frontend\CartController@apply_coupon')->name('apply.coupon');
Route::get('destroy/coupon', 'Frontend\CartController@destroy_coupon')->name('destroy.coupon');

//payment
Route::get('payment', 'Frontend\PaymentController@index')->name('payment.page');
Route::post('payment/process', 'Frontend\PaymentController@payment')->name('payment.process');
Route::post('stripe/charge', 'Frontend\PaymentController@stripeCharge')->name('strip.charge');

//2 checkout
Route::get('/callback', 'Frontend\PaymentController@callBack');



//language routes
Route::get('/language/bangla', 'Frontend\LanguageController@bangla')->name('language.bangla');
Route::get('/language/english', 'Frontend\LanguageController@english')->name('language.english');

//order track
 Route::post('order/tracking', 'HomeController@OrderTracking')->name('order.tracking');




//wishlists
Route::get('user/wishlist/','WishlistController@Wishlist')->name('user.wishlist');

//return 
Route::get('success/list/','Frontend\PaymentController@SuccessList')->name('success.orderlist');
Route::get('request/return/{id}','Frontend\PaymentController@RequestReturn');

//search 
Route::post('product/search', 'FrontController@ProductSearch')->name('product.search');




