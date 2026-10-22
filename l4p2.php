
use Illuminate\Support\Facades\Route;

Route::get('/student/{id}/{name}', function ($id, $name) {
    return "Student ID: " . $id . "<br>Student Name: " . $name;
});
