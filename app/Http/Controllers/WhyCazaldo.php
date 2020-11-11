<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhyCazaldo extends Controller
{
    //
    function index()
    {

        $data['title'] = 'Why Cazaldo | Cazaldo';
        $data['layout'] = 'frontend.why';
        return view( 'frontend.layout', $data);

    }
}
