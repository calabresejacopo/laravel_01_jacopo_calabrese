<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {
    return view('welcome');
}
    public function chisiamo () {
    return view('chisiamo');
}
    public function servizi (){
    return view('servizi');
}

}

