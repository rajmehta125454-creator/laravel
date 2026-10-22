
Route::get('/user/{name?}', function ($name = 'Guest') {
    return "Welcome " . $name;
});
