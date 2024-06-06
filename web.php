<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 
// Passing parameter in Route 
// Route::get('/post/{id?}', function (string $value = null) {
//     if ($value) {
//         return "<h1>Post ID : " . $value . "</h1>";
//     } else{
//         return "<h1>No ID found</h1>";
//     }
// });

// Passing parameter and comments in URL Route
// Route::get('/post/{id?}/comment/{commentid}', function (string $value = null, string $comment = null) {
//     if ($value) {
//         return "<h1>Post ID : " . $value . "</h1><h2>Post ID : " . $comment . "</h2>";
//     } else{
//         return "<h1>No ID found</h1>";
//     }
// });

// Route constraints
// Route::get('/post/{id?}', function (string $value = null) {
//     if ($value) {
//         return "<h1>Post ID : " . $value . "</h1>";
//     } else{
//         return "<h1>No ID found</h1>";
//     }
// })-> whereNumber('id');

// Route::get('/post/{id?}', function (string $value = null) {
//     if ($value) {
//         return "<h1>Post ID : " . $value . "</h1>";
//     } else{
//         return "<h1>No ID found</h1>";
//     }
// })-> whereAlpha('value');

// Route::get('/post/{id?}', function (string $value = null) {
//     if ($value) {
//         return "<h1>Post ID : " . $value . "</h1>";
//     } else{
//         return "<h1>No ID found</h1>";
//     }
// })-> whereAlphaNumeric('value');


Route::get('/post/{id?}', function (string $value = null) {
    if ($value) {
        return "<h1>Post ID : " . $value . "</h1>";
    } else{
        return "<h1>No ID found</h1>";
    }
})-> whereIn('id', ['PHP', 'Printing', 'Laravel']);



Route::get('/post/firstpost', function () {
    return view('firstpost');
});
// Route :: view('/post', 'post'); single line view


// User will se Hello page URL , in Backgroud another page will run
// Route::get('/Hello', function () {
    // return view('post'); 
//  });
