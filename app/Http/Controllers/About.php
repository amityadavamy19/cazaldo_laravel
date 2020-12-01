<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    //
    function index()
    {

        $data['title'] = 'About Us | Cazaldo';
        $data['layout'] = 'frontend.about';
        return view( 'frontend.layout', $data);
    }
}
