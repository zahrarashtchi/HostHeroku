<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use App\Notifications\NewMessage;
use Illuminiate\Support\Facades\Gate;

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

Route::get('/', function () {
   User::truncate();

  /* if(Gate::allows('update-contact',$contact)){
       //update the contact
   }

   if(Gate::denies('update-contact',$contact)){
       abort(403);
   }

   if(Gate::denies('add-contact-to-group',[$contact,$group])){
       abort(403);
   }

   if(Gate::forUser($user)->denies('create-contact')){
       abort(403);
   }*/
});

Route::get('test-mail',function(){
    Notification::route('mail','zahrary7@gmail.com')->notify(new NewMessage());
    return 'Sent';
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
