<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // for validatiobns
use App\Models\admin\Slider;

class SliderController extends Controller
{
    //
    public function viewSliders()
    {

        return view('admin.slider.viewSlider');
    }


    public function slidersList()
    {

        //$Slider = DB::table('blogs')->select('*');
        $slider = Slider::all();
        $val = datatables()->of($slider)
            ->addIndexColumn()
            ->make(true);

        //getting Protected data from JSON Object
        $test = $val->getData();
        $data = array();
        foreach ($test->data  as $row) {
            $url = asset('uploads/slider/' . $row->image);
            $image =   '<img src= "' . $url . '"  height="80" width="100" />';

            $data[] = (object)array(

                'DT_RowIndex' => $row->DT_RowIndex,
                'title' => $row->title,
                'image' => $image,
                'date_modified' => \Carbon\Carbon::parse($row->date_modified)->format('d M Y'),
                'action' => '<a title="Edit/View" class="update btn btn-info" href="' . url()->to('admin/editSlider/') . '/' . $row->id . '"><i class="fa fa-edit"></i> </a>',

            );
        }

        $test->data = $data;
        return json_encode($test);
    }


    public function addSlider()
    {


        return view('admin.slider.addSlider');
    }


    public function addNewSlider(Request $request)
    {


        $v = Validator::make($request->all(), array(

            'title' => 'required',

            'image' => 'required|mimes:png,jpg,jpeg|max:2048',


        ));


        if ($v->fails()) {

            return redirect()->back()->withErrors($v->errors());
        } else {

            $file = $request->file('image');

            //Move Uploaded File
            $filename = time() . '.' . $file->extension();
            $file->move(public_path('uploads/slider'), $filename);


            $slider = new Slider;
            $slider->title = $request->title;

            $slider->image =  $filename;

            $slider->date_modified =  date('Y-m-d H:i:s');
            $slider->save();

            return redirect()->route('viewSliders');
        }
    }



    public function editOld(Request $request, $id)
    {

        $data = Slider::find($id);
        // $data = Blog::where('id',$id)->first();
        // Compact creates an array from existing var given as string arguments
        return view('admin.slider.editSlider', compact(['data']));
    }


    public function editSlider(Request $request)
    {
        $v = Validator::make($request->all(), array(

            'title' => 'required',



        ));


        if ($v->fails()) {

            return redirect()->back()->withErrors($v->errors());
            //return redirect()->back()->withErrors('success','successfull');

        } else {

            $file = $request->file('image');
            if ($file) {
                //Move Uploaded File
                $filename = time() . '.' . $file->extension();
                $file->move(public_path('uploads/slider'), $filename);
            } else {

                $filename = $request->input('old_image');
            }

            $update_data = array(

                'title' => $request->title,
                'image' => $filename,

            );

            slider::where('id', $request->id)->update($update_data);
            return redirect()->route('viewSliders');
        }
    }
}
