<?php

use Illuminate\Support\Facades\Route;

$menu = [
    'Home' => '/',
    'Contacts' => '/contacts',
    'Reports' => '/reports'
];

Route::get('/', function () use ($menu) {
    return view('welcome', [
        'menu' => $menu,
        'active' => 'Home',
    ]);
});

Route::get('/reports', function () use ($menu) {
    return view('contacts', [
        'menu' => $menu,
        'active' => 'Contacts',
    ]);
});

Route::get('/reports', function () use ($menu){
    return view('reports', [
        'menu' => $menu,
        'active' => 'Reports',
    ]);
});