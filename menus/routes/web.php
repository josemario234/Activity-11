<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $menuSelection= [
        "Home",
        "Contacts",
        "Reports"
    ];
    return view('welcome',
    [
        "menu" => $menuSelection
    ]);
});
