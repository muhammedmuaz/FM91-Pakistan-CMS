<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\playlistController;
use App\Http\Controllers\SheduleController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\AddsController;
use App\Http\Controllers\podcastController;


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


Route::get('/',[LoginController::class, 'LoginPage']);
Route::post('/login',[LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
});
Route::post('/registerUser',[LoginController::class, 'registerUser']);



Route::get('/dashboard', function () {
    return view('dashboard');
})
// ->middleware('isLoggedIn')
;




Route::get('/forgotPassword', function () {
    return view('resetPassword');
});


Route::get('/users', function () {
    return view('users');
});



Route::post('/registerUser',[LoginController::class, 'registerUser']);


Route::get('/AddPlaylist',[playlistController::class, 'index']);
Route::get('/deletePlaylist/{id}',[playlistController::class, 'destroy']);
Route::post('/AddPlaylistName',[playlistController::class, 'store']);
Route::post('/updatePlaylist/{id}',[playlistController::class, 'update']);
Route::get('/schedule', [SheduleController::class, 'index'])

;
Route::get('/schedule-add', [SheduleController::class, 'create'])

;
Route::post('/AddSchedule',[SheduleController::class, 'store']);
Route::get('/EditSchedule/{id}/{day}',[SheduleController::class, 'update']);
Route::post('/UpdateSchedule/{id}/{day}',[SheduleController::class, 'edit']);
Route::get('/deleteSchedule/{id}/{day}',[SheduleController::class, 'destroy']);
Route::get('/Playlist', [playlistController::class, 'PlaylistPageindex']);
Route::get('/Playlistform/{id}', [playlistController::class, 'PlaylistPageform']);
Route::post('/Playlistsongadd/{id}', [playlistController::class, 'storePlaylist']);
Route::get('/PlaylistsongeditPage/{playlistId}', [playlistController::class, 'PlaylistPageEditform']);
Route::post('/Playlistsongedit/{id}', [playlistController::class, 'UpdatePlaylist']);
Route::get('/DeletePlaylistsong/{id}', [playlistController::class, 'destroyPlaylistSong']);
Route::get('/Events', [EventController::class, 'index']);
Route::post('/AddEvent',[EventController::class, 'store']);
Route::get('/deleteEvent/{id}',[EventController::class, 'destroy']);
Route::get('/Adds',[AddsController::class, 'index']);
Route::post('/storeAdd', [AddsController::class, 'storeAdd']);
Route::get('/deleteAdd/{id}',[AddsController::class, 'destroy']);
Route::get('/podcastcover',[podcastController::class, 'index']);



Route::get('/Podcast', function () {
    return view('podcast/podcast');
});


Route::get('/PodcastShow', function () {
    return view('podcast-main');
});


