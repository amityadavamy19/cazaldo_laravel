<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Faq extends Controller
{
    //
    function index()
    {

        $data['title'] = 'Faq | Cazaldo';
        $data['layout'] = 'frontend.faq';
        return view( 'frontend.layout', $data);

    }
}
