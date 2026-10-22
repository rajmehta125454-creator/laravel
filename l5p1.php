
<?php

use Illuminate\Support\Facades\Route;

Route::get('/student', function () {
    return 'Welcome to Student Page';
})->name('student');
