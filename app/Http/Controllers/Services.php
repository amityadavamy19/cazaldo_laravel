<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Services extends Controller
{
    //
    function index()
    {

        $data['title'] = 'Services | Cazaldo';
        $data['layout'] = 'frontend.services';
        return view( 'frontend.layout', $data);

    }
}
