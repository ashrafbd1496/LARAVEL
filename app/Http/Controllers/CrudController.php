<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
	//sign up page method
    public function showSinguUpPage()
    {
    	return view('index');
    }

    //table page mehtod
    public function showTablePage()
    {
    	return view('table');
    }








}
