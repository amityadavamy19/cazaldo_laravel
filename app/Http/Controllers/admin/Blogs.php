<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator; // for validatiobns
use Illuminate\Http\Request;
use App\Models\admin\Blog;
use DB;
class Blogs extends Controller
{
    //

    public function viewBlogs()
    {
           
        return view('admin.blogs.viewBlogs');

    }


    public function blogList()
    {
           
       //$blogs = DB::table('blogs')->select('*');
         $blogs = Blog::all();
         $val= datatables()->of($blogs)
        ->addIndexColumn()
        ->make(true);

        //getting Protected data from JSON Object
         $test= $val->getData();
         $data = array();
         foreach ($test->data  as $row) {

            $data[] = (object)array(
               
               'DT_RowIndex'=> $row->DT_RowIndex,
               'title'=> $row->title,
               'thumbnail'=> $row->thumbnail,
               'created_at'=> \Carbon\Carbon::parse($row->created_at)->format('d/m/Y'),
               'action'=> '<a title="Edit/View" class="update btn btn-info" href="' . url()->to('admin/editOld/') . '/' . $row->id . '"><i class="fa fa-edit"></i> </a>',

            );
         

         }
      
            $test->data= $data;
            return json_encode($test);

    }


    public function addBlog()
    {
       
      
        return view('admin.blogs.addBlog');

    }


    public function addNewBlog( Request $request )
    {
       
      
        $v = Validator::make($request->all(),array(
            
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|mimes:png,jpg,jpeg|max:2048',
            

           )); 
       
       
           if($v->fails())
           {
               
              return redirect()->back()->withErrors($v->errors());

            }else{
                
                $file = $request->file('thumbnail');
                
                //Move Uploaded File
                $filename = time().'.'.$file->extension();  
                $file->move(public_path('uploads'), $filename);


                $blog = new Blog;
                $blog->title = $request->title;
                $blog->description = $request->description;
                $blog->thumbnail =  $filename;
                $blog->created_at =  date('Y-m-d H:i:s');
                $blog->updated_at =  date('Y-m-d H:i:s');
                $blog->save();
                
                return redirect()->route('viewBlogs');

            }
    }



    public function editOld( Request $request, $id )
    {
       
          $data = Blog::find($id);
       // $data = Blog::where('id',$id)->first();
       // Compact creates an array from existing var given as string arguments
          return view('admin.blogs.editBlog', compact(['data']));
        
    }


    public function editBlog( Request $request )
    {
        $v = Validator::make($request->all(),array(
            
            'title' => 'required',
            'description' => 'required',
            

           )); 
       
       
           if($v->fails())
           {
               
              return redirect()->back()->withErrors($v->errors());
              //return redirect()->back()->withErrors('success','successfull');

            }else{
               
                $file = $request->file('thumbnail');
                if( $file )
                {
                   //Move Uploaded File
                    $filename = time().'.'.$file->extension();  
                    $file->move(public_path('uploads'), $filename);

                }else{
                        
                    $filename = $request->input('old_thmb');

                }
                
                $update_data = array(
                        
                                'title'=> $request->title,
                                'thumbnail'=> $filename,
                                'description'=> $request->description
                            );
                
                Blog::where('id',$request->id)->update($update_data);
                return redirect()->route('viewBlogs');


    }
}



}
