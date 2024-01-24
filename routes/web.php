<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

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
    return view('index');
});

// Dynamic Twig template routes catchall
// Does not match if any segments begin with an underscore
// which allows private templates; e.g `people/_components/...`
Route::any('{twigTemplate}', function ($twigTemplate) {
    try {
        return view($twigTemplate);
    } catch (Exception $e) {
        throw new NotFoundHttpException();
    }
})->where('twigTemplate', '^(?!_)(?!.*\/_).*$');
