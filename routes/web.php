<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return '<h1>Available Jobs</h1>';
})->name('jobs');

Route::get('/posts/{id}', function(string $id) {
    return 'post ' . $id;
})->whereNumber('id'); //whereAlpha for text

Route::get('/posts/{id}/comments/{commentId}', function(string $id, string $commentId) {
    return 'post ' . $id . 'Comment ' . $commentId;
});
