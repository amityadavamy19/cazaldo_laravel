<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{
    //

    function index()
    {

        $data['title'] = 'Contact Us | Cazaldo';
        $data['layout'] = 'frontend.contact';
        return view( 'frontend.layout', $data);

    }
}
