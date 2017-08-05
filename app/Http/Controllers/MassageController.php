<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MassageController extends Controller
{
    public function package_list()
    {
        return view('massage_package_list');
    }
}
