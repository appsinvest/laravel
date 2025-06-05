<?php

use App\Http\Controllers\Api\V1\ApiController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'v1/'
], static function () {
    Route::get('/endpoint', [ApiController::class, 'endpoint']);
});

