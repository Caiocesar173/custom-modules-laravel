<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
| Respect the following s while creating new route files:
|   
| File Name
| route_description.php
|
| File Content: 
|
| <?php
|   use App\Http\Controllers\Controller;
|   use Illuminate\Support\Facades\Route;
|
|
|   Route::middleware(['BackLog:web', 'web'])->group(function() {
|       Route::get('/', [Controller::class, 'index']);
|   });
*/

use Caiocesar173\Utils\Classes\Routes;

(env('BASE_PACKAGE_API_ROUTES_ENABLE') === TRUE) ? Routes::RequirePath(__DIR__.'/api') : '';