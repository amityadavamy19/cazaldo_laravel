<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class Contact extends Controller
{
    //

    function index()
    {
             
       
        $data['title'] = 'Contact Us | Cazaldo';
        $data['layout'] = 'frontend.contact';
        return view( 'frontend.layout', $data);

    }
    
    
    
    
    
    
    //Submit Form Request
    
    public function processRequest( Request $request )
    {
        
            $validator = Validator::make($request->all(), [

            'name' => 'required',

            'email' => 'required|email',

            'phone' => 'required',
            'message' =>'required'

        ]);


        if ($validator->passes()) {


            // Store Data in DATABASE from HERE 
            
            
            // Send Mail 
            
            $this->sendEnqMail( $request->email, 'info@cazaldo.com', 'Cazaldo Team', $request->message, 'Enquiry Submission', $request->name);
           
            return response()->json(['success'=>'Thank you!! Your query has been submitted.']);

            
 
        }


        return response()->json(['error'=>$validator->errors()]);
        
      

    }

        
        
        public function sendEnqMail( $to_email, $from, $from_name, $msg, $sub, $to_name)
        {
            
               
       
                $data = array('name'=> $to_name, 'body' => $msg ,'to'=>$to_email, 'from'=>$from, 'from_name'=>$from_name, 'sub'=>$sub);
                
                return $mail_stat =   Mail::send('frontend.mail-template.mail', $data, function($message) use ($data) {
            
                                        $message->to($data['to'], $data['name'])->subject( $data['sub'] );
                                        $message->from( $data['from'],$data['from_name']);
                    
                
                      
                                       });
                    
              
                   
            
        }
        
        
  
    
    
    
    
    
}
