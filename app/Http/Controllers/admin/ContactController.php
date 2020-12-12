<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // for validations
use App\Models\admin\Contact;

class ContactController extends Controller
{


    public function editcontactdata(Request $request)
    {

        $data = Contact::find('1');
        // $data = Blog::where('id',$id)->first();
        // Compact creates an array from existing var given as string arguments
        return view('admin.contact.editContact', compact(['data']));
    }

    public function editContact(Request $request)
    {
        $v = Validator::make($request->all(), array(

            'phone' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'facebook' => 'required',
            'instagram' => 'required',
            'google' => 'required',
            'linkedin' => 'required',
            'twitter' => 'required',
            'address' => 'required',

        ));


        if ($v->fails()) {

            return redirect()->back()->withErrors($v->errors());
            //return redirect()->back()->withErrors('success','successfull');

        } else {

            $file = $request->file('logo');
            if ($file) {
                //Move Uploaded File
                $filename = time() . '.' . $file->extension();
                $file->move(public_path('uploads/logo'), $filename);
            } else {

                $filename = $request->input('old_logo');
            }

            $update_data = array(

                'phone' =>  $request->phone,
                'mobile' =>  $request->mobile,
                'email' =>  $request->email,
                'facebook' =>  $request->facebook,
                'instagram' =>  $request->instagram,
                'google' =>  $request->google,
                'linkedin' =>  $request->linkedin,
                'twitter' =>  $request->twitter,
                'address' =>  $request->address,
                'logo' => $filename,

            );

            $result = Contact::where('id', '1')->update($update_data);




            redirect('admin/contact/edit');
            return redirect()->route('editContactus');
        }
    }  //
}
