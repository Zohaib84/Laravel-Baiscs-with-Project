<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');
 

// Group Route
Route::prefix('page')->group(function(){
    Route::get('/about', function(){
        return "<h1>About Page</h1>";
    });
    Route::get('/galery',function(){
        return "<h1>Gallery Page</h1>";
    });
    Route::get('post/firstpost', function(){
        return "<h1>First Post Page</h1>";
    });
});

Route::fallback(function(){
    return "<h1>Page not found</h1>";  // Fallback function if the page dosenot fund it will show the message
});

// Route::get('about', function(){
//     return view('about');
// });

// Route::get('/postss', function(){
//     return view('post');
// })->name('mypost'); // Route named Solotion if we changed the route name it will work properly


// Route::get('test', function(){
//     return view('about');
// });

// Route::redirect('/about','/test', 301); // Redirect usefull for search engine. 
// //IF we make changes in URL the Redirect will get the url of about page
