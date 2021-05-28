<?php

Route::get('/create_account',function()
{
return view('create_account');
});

Route::get('/students_registration_form',function()
{
return view('students_registration_form');
});

Route::get('/menu',function()
{
return view('menu');
});

Route::get('/header',function()
{
return view('header');
});

Route::get('/footer',function()
{
return view('footer');
});

Route::get('/Declare_Outside_Permission',function()
{
return view('Declare_Outside_Permission');
});


Route::get('/CheckForYourPermission',function()
{
return view('CheckForYourPermission');
});

Route::get('/studentMenus',function()
{
return view('studentMenus');
});

Route::get('/student',function()
{
return view('student');
});

Route::get('/admin',function()
{
return view('admin');
});

Route::get('/',function()
{
return view('index');
});


//Route::resource('/student',studentcontroller::class);















