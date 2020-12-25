<?php


// use App\Http\Controllers\HomeController; // za L8 trazi da doda kada ubacim controller
// use App\Http\Controllers\PostController; // za L8 trazi da doda kada ubacim controller
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/','home')->name('home'); // render the page
// Route::get('/', 'HomeController@home')->name('home'); //  (za L8 Ne radi koristi dodnji) kad imam controller koristim get
// Route::get('/', 'HomeController@contact')->name('contact'); //  (za L8 Ne radi koristi dodnji)
// Route::view('/contact','contact')->name('contact'); // render the page


// Route::get('/', [HomeController::class, 'home'])->name('home'); // za L8
// Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); // za L8
// Route::resource('/posts', PostController::class, 'all'); // za L8 postcontr ovako ipak ne radi


Route::get('/', 'HomeController@home')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');
// Route::resource('/posts', PostController::class); // za L8 postcontr ovako radi
Route::resource('/posts', 'PostController'); // za L8 postcontr ovako radi i ovako radi



// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//
// /var/www/html/laravel/test_/laravel/app/Providers/RouteServiceProvider.php
// odkomentirati  protected $namespace = 'App\\Http\\Controllers'; zbog toga ne rade
// !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!//






// Route::get('/blog-post/{id}/{welcome?}', [HomeController::class, 'blogPost'])->name('blog-post'); // za L8

// Route::get('/blog-post/{id}/{welcome?}', function ($id,$welcome =1) {
//         $pages = [
//             1 => [
//                 'title'=>'from page 1'
//             ],
//             2 => [
//                 'title'=>'from page 2!'
//             ],

//         ];
//         // $welcomes = [1 => '<b>hello</b>', 2=>'welcome to '];
//         $welcomes = [1 => 'hello', 2=>'welcome to '];


//         return view ('blog-post', [
//             'data'=> $pages[$id],
//             'welcome'=> $welcomes[$welcome]
//             ]);
//     })->name('blog-post'); // returning some data wtih 2parameters w/ require one and optional one


// Route::get('/blog-post/{id}', function ($id) {
//     $pages = [
//         1 => [
//             'title'=>'hello from one'
//         ],
//         2 => [
//             'title'=>'hello from two!'
//         ],

//     ];
//     $welcome = [1 => 'hello', 2=>'welcome to '];

//     return view ('blog-post', ['data'=> $pages[$id]]);
// }); // returning some data

// Route::get('/blog-post/{id}/{author}', function ($id, $authorName) {
//     return $id.$authorName;
// }); // returning id contacinate with author


// Route::get('/blog-post/{id}', function ($id) {
//     return $id;
// }); // returning id cant fo this {blog-post-id} but underscore yes

// Route::get('/contact', function () {
//     return view('contact');
// });
