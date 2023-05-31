<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function purchaes(){
        return view('website.purchase_Information');
    }
    public function financial(){
        return view('website.financial_Information');
    }
}