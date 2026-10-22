
<?php

use Illuminate\Support\Facades\Route;

Route::get('/student/{id}', function ($id) {
    return "Student ID is: " . $id;
});
