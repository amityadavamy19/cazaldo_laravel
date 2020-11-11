<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //


    function index()
    {

        
        $data['title'] = 'Home | Cazaldo';
        $data['layout'] = 'frontend.home';
        return view( 'frontend.layout', $data);

    }
   
}
