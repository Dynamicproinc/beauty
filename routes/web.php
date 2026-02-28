<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StripeWebhookController;

Route::get('/', function () {
    return view('tallow_theme');
})->name('welcome');
use Illuminate\Support\Facades\Artisan;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('product/{id}',[App\Http\Controllers\ShopController::class, 'showProduct'])->name('shop.product.show');
Route::get('cart',[App\Http\Controllers\ShopController::class, 'cart'])->name('shop.cart');
Route::get('checkout',[App\Http\Controllers\ShopController::class, 'checkout'])->name('shop.checkout');
// Route::get('order-confirmation/{slug}',[App\Http\Controllers\ShopController::class, 'thankyou'])->name('shop.thankyou');
route::get('order-confirmation/{slug}', [App\Http\Controllers\ShopController::class, 'invoice'])->name('shop.invoice');
route::get('order-confirmation-card-payment/{stripe_session_id}', [App\Http\Controllers\ShopController::class, 'stripeSuccess'])->name('shop.stripe.success');
// admin routes
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin.products');
Route::get('/admin/products/add', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('admin.products.add');
Route::get('/admin/products/edit/{id}', [App\Http\Controllers\AdminController::class, 'editProduct'])->name('admin.products.edit');
Route::get('/admin/products/edit/{id}/add/product-info', [App\Http\Controllers\AdminController::class, 'addProductInfo'])->name('admin.products.edit.info');
Route::post('/admin/products/edit/product-info/update/{id}', [App\Http\Controllers\AdminController::class, 'saveProductInfo'])->name('admin.products.edit.infoupdate');
Route::get('/admin/products/edit/product-info/edit/{id}', [App\Http\Controllers\AdminController::class, 'editProductInfo'])->name('admin.products.edit.infoedit');
Route::post('/admin/products/edit/product-info/edit/{id}/update', [App\Http\Controllers\AdminController::class, 'updateProductInfo'])->name('admin.products.edit.infoedit.update');
// inventory
Route::get('/admin/inventory/add-stock', [App\Http\Controllers\AdminController::class, 'addStock'])->name('admin.inventory.addstock');
Route::get('/admin/inventory/stock-entries', [App\Http\Controllers\AdminController::class, 'stockEntries'])->name('admin.inventory.stockentries');

// Route::get('/abc123', function () {
//     Artisan::call('migrate', ['--force' => true]);
//     return response()->json(['status' => 'Migration completed']);


// });;
// use Illuminate\Support\Facades\Artisan;
// payment routes


Route::get('/checkout-stripe', [StripeController::class, 'checkout']);
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handle']);
Route::get('/check-payment-status/{sessionId}', function ($sessionId) {

    $order = \App\Models\SalesOrder::where('stripe_session_id', $sessionId)->first();

    if (!$order) {
        return response()->json(['status' => 'not_found']);
    }

    return response()->json([
        'status' => $order->stripe_status,
    ]);
});

// payment susccess card payment and show invoice

// 

Route::get('/abc123', function () {
    Artisan::call('migrate', ['--force' => true]);

    return response()->json([
        'status' => 'Migration completed'
    ]);
});
