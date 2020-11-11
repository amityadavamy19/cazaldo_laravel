<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowWeWork extends Controller
{
    //
    function index()
    {

        $data['title'] = 'How We Work | Cazaldo';
        $data['layout'] = 'frontend.how_work';
        return view( 'frontend.layout', $data);

    }
}
