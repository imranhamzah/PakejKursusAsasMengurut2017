<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebAppFreeLancerController extends Controller
{
    public function index()
    {
        return view("web_app_freelancer");
    }
}
