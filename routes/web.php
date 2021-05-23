<?php

 use Illuminate\Support\Facades\Mail;
 use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('contacto', function () {
    return view('contact');
})->name('contact');

Route::get('nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('inisesion', function () {
    return view('inisesion');
})->name('inisesion');

Route::get('Error404', function () {
    return view('404');
})->name('404');

Route::post('messages', function(){
    //enviar correo 
    $data = request()->all();
    Mail::send("emails.message", $data, function($message) use ($data) {
        $message->from($data['email'], $data['name'])
            ->to('dprueba029@gmail.com', 'Diego')
            ->subject($data['subject']);
    });
    //responder al usuario
    return back()->with('flash', $data['name'] .',  Tu mensaje ha sido recibido');

})->name('messages');