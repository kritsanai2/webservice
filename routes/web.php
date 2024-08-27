<?php

use \App\Models\Country;
use \App\Models\Region;
use \App\Models\Province;
use \App\Models\Teacher;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    
    // คำสั่งในการ debug ข้อมูล
    // การ query
    //  การดึงข้อมูลในตาราง Provinces ทั้งหมด และเก็บค่าใส่ตัวแปร model

    // $c = Country::all();
    // dd($c[0]->region);
    // return view('welcome');

    $c = Country::all();
    dd($c[0]->region[0]->province[0]->teacher[0]);
    
    $t = Teacher::find(10);
    dd($t->province->region->country);
    return view('welcome');
    

});