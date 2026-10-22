
<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {

    Route::get('/home', function () {
        return 'Admin Home Page';
    });

    Route::get('/users', function () {
        return 'Admin Users Page';
    });

});
