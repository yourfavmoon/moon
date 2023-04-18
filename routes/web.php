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

Route::get('/students',function() {
   $arr =[
       'students'=> [
            [
            
            'id' =>1,
            'name' =>'Ahmed Sobhi'
        ],
        [
            'id' =>2,
            'name' =>'Menna sobhi'
        ],
        [
            
            'id' =>3,
            'name' =>'Manar sousa'
        ],
        [
            
            'id' =>4,
            'name' =>'Khloud sobhi'
        ],
        [
            
            'id' =>5,
            'name' =>'Ahmed mohamed'
        ],
        [
            'id' =>6,
            'name' =>'Omar mohamed'
        ],
        [
            
            'id' =>7,
            'name' =>'shaimaa mohamed'
        ],
        [
            
            'id' =>8,
            'name' =>'Mai sousa'
        ]
        ]
    ];
    return view("students",$arr);
});
