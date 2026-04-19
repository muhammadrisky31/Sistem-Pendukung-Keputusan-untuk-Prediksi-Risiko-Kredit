<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/predict', function () {
    return view('predict');
});
