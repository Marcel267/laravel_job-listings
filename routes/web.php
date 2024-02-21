<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Http\Request;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ListingController::class, 'index']);

//listing parameter -> Route model binding
Route::get('/listing/{listing}', [ListingController::class, 'show']);

/*
Common Ressource Routes:
index - Show all listings
show - show single listing
create - show form to create new listing
store - store new listing
edit - show form to edit listing
update - update listing
destroy - delete listing
*/
