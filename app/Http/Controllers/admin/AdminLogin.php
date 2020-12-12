<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; // for validatiobns
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User; //for models
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail; //Mail
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Hash; //for Hash

class AdminLogin extends Controller
{
    
    
    function index()
    {
        return view('admin.login');

    }

    



    function LoginMe( Request $request )
    {
      
      
       $v = Validator::make($request->all(),array(
           
           'email' => 'required|email',
           'password' => 'required|alphaNum|min:3'
          )); 
      
      
          if($v->fails())
          {
             
              return back()->withErrors($v->errors());

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
           return $this->index();

       }
             
     }

    }


    public function profile(Request $request)
    {
        $userid = $request->session()->get('aduserId');
        $data = User::where('id', $userid)->first();
        return view('admin.admProfile', compact('data'));
    }
    

    public function editProfile(Request $request)
    {
        $v = Validator::make($request->all(), array(

            'fname' => 'required',
            'mobile' => 'required',
            'email' => 'required',

        ));


        if ($v->fails()) {

            return redirect()->back()->withErrors($v->errors());

        } else {



            $update_data = array(

                'name' => $request->fname,
                'mobile' => $request->mobile,
                'email' => $request->email,


            );

            user::where('id', $request->userId)->update($update_data);
            $request->session()->flash('success', 'Profile Updated Successfully');
            $userid = $request->session()->get('aduserId');
            $data = User::where('id', $userid)->first();

            return view('admin.admProfile', compact('data'));
        }
    }

    public function checkEmailExists(Request $request)
    {
        $userId = $request->userId;
        $email = $request->email;

        if (empty($userId)) {
            $result = User::select('email')
                ->where('email', '=', $request->email)
                ->get();
        } else {
            $result = User::select('email')
                ->where('email', '=', $request->email)
                ->where('id', '!=', $userId)
                ->get();
        }

        if (empty($result->toArray())) {
            echo ("true");
        } else {
            echo ("false");
        }
    }

    
    public function newPassword(Request $request)
    {
        $v = Validator::make($request->all(), array(

            'oldPassword' => 'required',
            'newPassword' => 'required|confirmed',
            'newPassword_confirmation' =>'required'
           
        ));

        if ($v->fails()) {

            return redirect()->back()->withErrors($v->errors());
        } else {



            $oldPassword = $request->oldPassword;
            $newPassword = $request->newPassword;

            $useremail = $request->session()->get('ademail');
            $userid = $request->session()->get('aduserId');
            $user = User::where('email', '=', $useremail)->first();




            if (Hash::check($oldPassword, $user->password)) {

                $usersData = array(
                    'password' => Hash::make($newPassword),
                    'updated_at' => date('Y-m-d H:i:s')
                );

                $result = User::where('id', $userid)->update($usersData);


                if ($result) {
                    $request->session()->flash('success', 'Password updation successful');
                    

                    return redirect()->route('admin/dashboard');
                } else {
                    $request->session()->flash('error', 'Password updation failed');
                   

                    return redirect()->route('admProfile');
                }
            } else {

                $request->session()->flash('error', 'Your old password is not correct');
                return redirect()->route('admProfile');
            }
        }
    }












     public function newpass(Request $request)
    {  if( $request->session()->get('aduserId') != NULL ){
        echo "hello";
        echo session()->get('aduserId');

     }else{

       // return redirect('admin/login');
      // echo session()->get('aduserId');
      $users = DB::table('reset_password')
                    ->where('email', '=', 'admin@cazaldo.com')
                    ->orWhere('activation_id', 'lfsm5aYOHWmfC2S')
                    ->get();


                    echo $users->count();

        }
        
    }


    public function forgotPassword( Request $request )
    {
        $isLoggedIn = $request->session()->get('userid');
        
        if(!isset($isLoggedIn) || $isLoggedIn = NULL)
        {
            return view('admin.forgotPass');
        }
        else
        {
            return redirect('/admin/dashboard');
        }
    }

     

    function resetPasswordUser( Request $request)
    {
        $status = '';
        
        $v = Validator::make($request->all(),array(
            
            'email' => 'required|email',
        
           )); 
       
       
           if($v->fails())
           {
               
            return  redirect('admin/forgotPassword')->withErrors($v->errors());
           
            }else{
                
        
                $user = User::where('email',$request->email)->first();
            
            if($user)
            {
                $encoded_email = urlencode($request->email);
                
                
                $data['email'] = $request->email;
                $data['activation_id'] = Str::random(15);
                $data['createdDtm'] = date('Y-m-d H:i:s');
                $data['agent'] = $request->server('HTTP_USER_AGENT');;
                $data['client_ip'] = $request->ip();
                
                $save = DB::table('reset_password')->insert($data);               
                
                if($save)
                {
                    $data1['reset_link'] = url('/') . "admin/resetPasswordConfirmUser/" . $data['activation_id'] . "/" . $encoded_email;
                    $userInfo = $user;

                    if(!empty($userInfo)){
                        $data1["name"] = $userInfo->name;
                        $data1["email"] = $userInfo->email;
                        $data1["message"] = "Reset Your Password";
                    }

                    $sendStatus = $this->sendPwdMail( $request->email, 'info@carmechanic.com', 'Car mechanic', $data1, $data1["message"], $user->name);
					

                    if($sendStatus){
                        $status = "send";
                        $request->session()->flash($status, "Reset password link sent successfully, please check mails.");
                        return  redirect()->route('forgotPassword');
                    } else {
                        $status = "notsend";
                        $request->session()->flash($status, "Email has been failed, try again.");
                        return  redirect()->route('forgotPassword');
                    }
                }
                else
                {
                    $status = 'unable';
                    $request->session()->flash($status, "It seems an error while sending your details, try again.");
                    return  redirect()->route('forgotPassword');
                }
            }
            else
            {
                $status = 'invalid';
                $request->session()->flash($status, "This email is not registered with us.");
                return  redirect()->route('forgotPassword');
            }
            return  redirect()->route('forgotPassword');
        }
    }


    public function resetPasswordConfirmUser( $activation_id, $uemail )
    {
        // Get email and activation code from URL values at index 3-4
        $email = urldecode($uemail);
        
        // Check activation id in database
        
         $is_correct = DB::table('reset_password')
                                    ->where('email', '=', $email)
                                    ->orWhere('activation_id', $activation_id)
                                    ->get();

        $data['email'] = $email;
        $data['activation_code'] = $activation_id;
        
        if ($is_correct->count() == 1)
        {
            return view('admin/newPassword', $data);
        }
        else
        {
           return  redirect('admin/login');
        }
    }
    

    public function createPasswordUser( Request $req )
    {
        $status = '';
        $message = '';
        $email = strtolower($req->email);
        $activation_id = $req->activation_code;
        
        $v = Validator::make($req->all(),array(
            
            'password' => 'required|confirmed|max:20',
            
        
           )); 
       
       
           if($v->fails())
           {
               
            $this->resetPasswordConfirmUser($activation_id, urlencode($email));
           
            }else{


            $password = $req->password;
            $cpassword = $req->password_confirmation;
            
            // Check activation id in database
            $is_correct = DB::table('reset_password')
                                    ->where('email', '=', $email)
                                    ->orWhere('activation_id', $activation_id)
                                    ->get();
            
            if($is_correct->count() == 1)
            {                
                    DB::table('users')
                                ->where('email', $email)
                                ->update(['password' => $password]);
                
                $status = 'success';
                $message = 'Password reset successfully';
                
            }
            else
            {
                $status = 'error';
                $message = 'Password reset failed';
            }
            
            
            $req->session()->flash($status, $message);
            redirect("admin/login");
        }
    }



    public function sendPwdMail( $to_email, $from, $from_name, $msg, $sub, $to_name)
    {
            
               
       
                $data = array('name'=>$msg['name'],'link'=>$msg['reset_link'], 'body' => $msg['message'] ,'to'=>$to_email, 'from'=>$from, 'from_name'=>$from_name, 'sub'=>$sub);
                
                 $mail_stat =   Mail::send('frontend.mail-template.resetPass', $data, function($message) use ($data) {
            
                                        $message->to($data['to'], $data['name'])->subject( $data['sub'] );
                                        $message->from( $data['from'],$data['from_name']);
                    
                
                      
                                       });
                    
                                       return true;
                   
            
        }




     public function logout( Request $request)
    {
        $request->session()->flush();
        

        return redirect()->to('admin/login');
    }
}
