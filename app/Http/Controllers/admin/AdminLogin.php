<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; // for validatiobns
use Illuminate\Http\Request;
use App\Models\User; //for models


//use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Redirect;

class AdminLogin extends Controller
{
    //


    public function __construct( Request $request )
    {
     
     if( $request->session()->get('userid', 'default') != NULL ){

          redirect()->to('admin/dashboard');

          

      }else{

          redirect()->to('admin/login');

      }

    }
    
    function index()
    {
        return view('admin.login');

    }

    //



     function LoginMe( Request $request )
     {
       
       
        $v = Validator::make($request->all(),array(
            
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
           )); 
       
       
           if($v->fails())
           {
               
              return redirect()->back()->withErrors($v->errors());

            }else{


            
        
        $credentials = $request->except(['_token']);
        $user = User::where('email',$request->email)->first();

        if (auth()->attempt($credentials)) {
            
             

             $userdata = array(

                'aduserId'=> $user->id,
                'ademail'=> $user->email,
                'adname'=> $user->name,


             );

             $request->session()->put($userdata);
             return redirect()->route('admin/dashboard');


        }else{
            
            
            $request->session()->flash('message', 'Invalid credentials');
            return redirect()->back();

        }
              
      }
        


     }


     public function logout()
    {
        \Auth::logout();

        return redirect()->to('admin/login');
    }
}
