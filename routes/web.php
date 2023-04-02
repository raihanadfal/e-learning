<?php

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
//     return view('welcome');
// });

Route::get('/', function () {
  return view('home', [
    'title' => 'E - Learning'
  ]);
});

Route::get('/silabus', function () {
  return view('silabus', [
    'title' => 'Silabus'
  ]);
});
Route::get('/silabus/silabus', function () {
  return view('menu.silabus.silabus', [
    'title' => 'Silabus'
  ]);
});
Route::get('/silabus/rpp', function () {
  return view('menu.silabus.rpp', [
    'title' => 'RPP'
  ]);
});


Route::get('/hakikat-folklore', function () {
  return view('hakikat-folklore', [
    'title' => 'Folklore'
  ]);
});
Route::get('/hakikat-folklore/ciri-pengenal', function () {
  return view('menu.hakikat-folklore.ciri-pengenal', [
    'title' => 'Ciri Pengenal'
  ]);
});


Route::get('/hakikat-cerita-rakyat', function () {
  return view('hakikat-cerita-rakyat', [
    'title' => 'Cerita Rakyat'
  ]);
});
Route::get('/hakikat-cerita-rakyat/cerita-rakyat', function () {
  return view('menu.hakikat-cerita-rakyat.cerita-rakyat', [
    'title' => 'Cerita Rakyat'
  ]);
});
Route::get('/hakikat-cerita-rakyat/jenis-cerita-rakyat', function () {
  return view('menu.hakikat-cerita-rakyat.jenis-cerita-rakyat', [
    'title' => 'Jenis Cerita Rakyat'
  ]);
});


Route::get('/unsur-intrinsik', function () {
  return view('unsur-intrinsik', [
    'title' => 'Unsur Intrinsik'
  ]);
});
Route::get('/unsur-intrinsik/tema', function () {
  return view('menu.unsur-intrinsik.tema', [
    'title' => 'Tema'
  ]);
});
Route::get('/unsur-intrinsik/tokoh-penokohan', function () {
  return view('menu.unsur-intrinsik.tokoh', [
    'title' => 'Tokoh dan Penokohan'
  ]);
});


Route::get('/nilai-edukatif', function () {
  return view('nilai-edukatif', [
    'title' => 'Nilai Edukatif'
  ]);
});
Route::get('/nilai-edukatif/nilai-moral', function () {
  return view('menu.nilai-edukatif.nilai-moral', [
    'title' => 'Nilai Moral'
  ]);
});
Route::get('/nilai-edukatif/nilai-tradisi', function () {
  return view('menu.nilai-edukatif.nilai-tradisi', [
    'title' => 'Nilai Tradisi'
  ]);
});
Route::get('/nilai-edukatif/nilai-keagamaan', function () {
  return view('menu.nilai-edukatif.nilai-keagamaan', [
    'title' => 'Nilai Keagamaan'
  ]);
});
Route::get('/nilai-edukatif/nilai-kesejarahan', function () {
  return view('menu.nilai-edukatif.nilai-kesejarahan', [
    'title' => 'Nilai Kesejarahan'
  ]);
});
Route::get('/nilai-edukatif/nilai-kepahlawanan', function () {
  return view('menu.nilai-edukatif.nilai-kepahlawanan', [
    'title' => 'Nilai Kepahlawanan'
  ]);
});

Route::get('/cerita-rakyat-panjalu', function () {
  return view('cerita-rakyat-panjalu', [
    'title' => 'Cerita Rakyat Panjalu'
  ]);
});

Route::get('/lembar-kerja', function () {
  return view('lembar-kerja', [
    'title' => 'Lembar Kerja'
  ]);
});

Route::get('/penulis', function () {
  return view('penulis', [
    'title' => 'E - Learning'
  ]);
});
