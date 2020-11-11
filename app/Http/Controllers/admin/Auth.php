<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class Auth extends Controller
{

    public function __construct( Request $request )
    {
     
     if( $request->session()->get('userid', 'default') != NULL ){

          redirect()->to('admin/dashboard');

      }else{

          redirect()->to('admin/login');

      }

    }



    //
     function login( Request $req )
     {

         
          
          $v = Validator::make($req->all(),array(
            
               'username'=> 'required | min:5',
               'password'=>'required',
          
              )); 
              
      
              if($v->fails())
              {
                  
                 return redirect()->back()->withErrors($v->errors());
                 
              }else{
                      
                      
                      return redirect()->to('admin/dashboard');
                      
                      }
                       


     }

}
