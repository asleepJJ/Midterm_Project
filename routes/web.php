<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Middleware\CheckAge;


Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');


Route::get('/restricted-area', function () {
    return view('restricted-area');
})->name('restricted.area');


Route::get('/access-denied', function () {
    return view('access-denied');
})->name('access.denied');


Route::post('/store-age', function (Request $request) {
    $request->validate([
        'age' => 'required|integer|min:1|max:120',
    ]);


    session(['age' => $request->input('age')]);
    $age = $request->input('age');


    if ($age < 18) {
        return redirect()->route('access.denied');
    } elseif ($age >= 21) {
        return redirect()->route('restricted.area');
    } else {
        return redirect()->route('home1');
    }
})->name('store.age');


Route::middleware([CheckAge::class])->group(function () {
    Route::get('/home1', function () {
        return view('home1');
    })->name('home1');

    Route::get('/lab1', function () {
        return view('lab1');
    })->name('lab1');
    
    Route::get('/lab2', function () {
        return view('lab2');
    })->name('lab2');
    
    Route::get('/lab3', function () {
        return view('lab3');
    })->name('lab3');
    
    Route::get('/lab4', function () {
        return view('lab4');
    })->name('lab4');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');
    
});

