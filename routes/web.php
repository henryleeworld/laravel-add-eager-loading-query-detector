<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('books/no-eager-loading/', [BooksController::class, 'showNoEagerLoading']);
Route::get('books/eager-loading/', [BooksController::class, 'showEagerLoading']);
