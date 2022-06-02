<?php

namespace App\Http\Controllers;


use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function viewCategory()
    {
        $AuthController = New AuthController;
        $AuthController->sesExist();
        $data1 = $AuthController->sesExist();
        $data = $data1['data'];

        return view('category',compact('data'));
    }

   
}
