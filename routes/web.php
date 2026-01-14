<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.accueil');
})->name('home');

Route::get('/accueil', function () {
    return view('pages.accueil');
})->name('accueil');

Route::get('/actualites', function () {
    return view('pages.actualites');
})->name('actualites');

Route::get('/apeeac', function () {
    return view('pages.apeeac');
})->name('apeeac');

Route::get('/assurance', function () {
    return view('pages.assurance');
})->name('assurance');

Route::get('/conservatoire', function () {
    return view('pages.conservatoire');
})->name('conservatoire');

Route::get('/pepites-musicales', function () {
    return view('pages.pepites-musicales');
})->name('pepites-musicales');

Route::get('/petites-annonces', function () {
    return view('pages.petites-annonces');
})->name('petites-annonces');

Route::get('/vulgarisation', function () {
    return view('pages.vulgarisation');
})->name('vulgarisation');

Route::get('/trucs-astuces', function () {
    return view('pages.trucs-astuces');
})->name('trucs-astuces');

Route::get('/administratif', function () {
    return view('pages.administratif');
})->name('administratif');