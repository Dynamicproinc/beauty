<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StripeWebhookController;
use App\Http\Controllers\Auth\GoogleController;
use Illuminate\Support\Facades\Artisan;
use App\Models\EmailSubscription;
use App\Http\Middleware\SetLanguage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


//Home page
Route::get('/', [App\Http\Controllers\PagesController::class, 'welcome'])->name('welcome');
// language setting 
Route::get('/language/{lang}', function ($lang) {

    $availableLanguages = ['en', 'hr'];

    if (in_array($lang, $availableLanguages)) {
        Session::put('locale', $lang);
    }

    return redirect()->back();
});


//  unsubscribe the email

Route::get('unsubscribe-email/{ref}/{email}', function ($ref, $email) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "<h2>Invalid email address.</h2>";
    }


    $subs = EmailSubscription::where('reference', $ref)
        ->where('email', $email)
        ->first();

    if (!$subs) {
        return "<h2>Subscription not found or invalid link.</h2>";
    }

    if ($subs->status === 'unsubscribed') {
        return "<h2>You have already unsubscribed from our emails.</h2>";
    }


    $subs->status = 'unsubscribed';
    $subs->save();


    return "
        <div style='font-family: sans-serif; text-align: center; margin-top: 50px;'>
            <h1>Email Unsubscribed ✅</h1>
            <p>Your email <strong>{$email}</strong> has been successfully unsubscribed from our newsletters.</p>
            <p>Thank you for staying with us!</p>
        </div>
    ";
})->name('unsubscribe-email');

// delete the email from database
Route::get('delete-email/{ref}/{email}', function ($ref, $email) {

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "<h2>Invalid email address.</h2>";
    }

    $subs = EmailSubscription::where('reference', $ref)
        ->where('email', $email)
        ->first();

    if (!$subs) {
        return "<h2>Subscription not found or invalid link.</h2>";
    }

    $subs->delete();

    return redirect()->back()->with('success', 'Email deleted successfully');
})->name('delete-email')->middleware('auth', AdminMiddleware::class);
// Auth UI
Auth::routes(['verify' => true]);

// guest accessible pages 
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('account-orders', [App\Http\Controllers\HomeController::class, 'orders'])->name('account.orders')->middleware('verified');
Route::get('tallow-club', [App\Http\Controllers\HomeController::class, 'referralDashboard'])->name('account.referral-dashboard')->middleware('verified');
Route::get('ref/{code}', [App\Http\Controllers\ReferralsController::class, 'redirect'])->name('referral.redirect');

Route::get('product/{id}', [App\Http\Controllers\ShopController::class, 'showProduct'])->name('shop.product.show');
Route::get('products', [App\Http\Controllers\ShopController::class, 'allProducts'])->name('shop.product.all');
Route::get('cart', [App\Http\Controllers\ShopController::class, 'cart'])->name('shop.cart');
Route::get('checkout', [App\Http\Controllers\ShopController::class, 'checkout'])->name('shop.checkout');
Route::get('contact-us', [App\Http\Controllers\ShopController::class, 'contact'])->name('shop.contact');
Route::get('buy-gift-card', [App\Http\Controllers\ShopController::class, 'buyGiftCard'])->name('shop.buy-gift-card');
Route::get('privacy-statement', [App\Http\Controllers\PagesController::class, 'privacy'])->name('shop.privacy');
Route::get('terms-and-conditions', [App\Http\Controllers\PagesController::class, 'terms'])->name('shop.terms');
Route::get('news-letter-subscription', [App\Http\Controllers\PagesController::class, 'emailSubscription'])->name('shop.subscribe');
Route::get('our-story', [App\Http\Controllers\PagesController::class, 'ourStory'])->name('shop.our-story');
route::get('order-confirmation/{slug}', [App\Http\Controllers\ShopController::class, 'invoice'])->name('shop.invoice');
route::get('order-confirmation-card-payment/{stripe_session_id}', [App\Http\Controllers\ShopController::class, 'stripeSuccess'])->name('shop.stripe.success');
route::get('confirm-gift-card-payment/{stripe_session_id}', [App\Http\Controllers\ShopController::class, 'successGiftCard'])->name('shop.stripe.gift.success');
route::get('delivery-terms', [App\Http\Controllers\PagesController::class, 'deliveryTerms'])->name('shop.delivery.terms');




// admin routes

Route::middleware(['auth', AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/products', [App\Http\Controllers\AdminController::class, 'products'])->name('admin.products');
    Route::get('/products/add', [App\Http\Controllers\AdminController::class, 'addProduct'])->name('admin.products.add');
    Route::get('/products/edit/{id}', [App\Http\Controllers\AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::get('/products/edit/{id}/add/product-info', [App\Http\Controllers\AdminController::class, 'addProductInfo'])->name('admin.products.edit.info');
    Route::post('/products/edit/product-info/update/{id}', [App\Http\Controllers\AdminController::class, 'saveProductInfo'])->name('admin.products.edit.infoupdate');
    Route::get('/products/edit/product-info/edit/{id}', [App\Http\Controllers\AdminController::class, 'editProductInfo'])->name('admin.products.edit.infoedit');
    Route::post('/products/edit/product-info/edit/{id}/update', [App\Http\Controllers\AdminController::class, 'updateProductInfo'])->name('admin.products.edit.infoedit.update');
    Route::get('/inventory/add-stock', [App\Http\Controllers\AdminController::class, 'addStock'])->name('admin.inventory.addstock');
    Route::get('/inventory/stock-entries', [App\Http\Controllers\AdminController::class, 'stockEntries'])->name('admin.inventory.stockentries');
    Route::get('/orders', [App\Http\Controllers\AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
    Route::get('/shipping', [App\Http\Controllers\AdminController::class, 'shipping'])->name('admin.shipping');
    Route::get('/pickup-methods', [App\Http\Controllers\AdminController::class, 'pickupMethods'])->name('admin.pickup');
    Route::get('/gift-cards', [App\Http\Controllers\AdminController::class, 'giftCards'])->name('admin.gift-card');
    Route::get('/subscribers', [App\Http\Controllers\AdminController::class, 'subscribers'])->name('admin.subscribers');
    // Route::get('ship-order/{id}', [App\Http\Controllers\AdminController::class, 'shipOrder'])->name('admin.orders.ship');
    Route::patch(
        'orders/{order}/ship',
        [App\Http\Controllers\AdminController::class, 'shipOrder']
    )->name('admin.orders.ship');
});



//Payments handling and webhooks

Route::get('/checkout-stripe', [StripeController::class, 'checkout']);
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::post('/stripe/webhook', [StripeWebhookController::class, 'handle']);
Route::get('/check-payment-status/{sessionId}', function ($sessionId) {

    $order = \App\Models\SalesOrder::where('stripe_session_id', $sessionId)->first();
    $gift_card = \App\Models\DigitalGiftCard::where('stripe_session_id', $sessionId)->first();
    if ($order) {
        return response()->json([
            'status' => $order->stripe_status,
        ]);
    }

    if ($gift_card) {
        return response()->json([
            'status' => $gift_card->payment_status,
        ]);
    }

    return response()->json(['status' => 'not_found']);
});

//google
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


// Artisan  commands for the migrations
Route::get('/abc123', function () {
    Artisan::call('migrate', ['--force' => true]);

    return response()->json([
        'status' => 'Migration completed'
    ]);
});