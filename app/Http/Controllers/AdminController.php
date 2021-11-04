<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Helpers\UniversalClass;
use Auth;

class AdminController extends Controller
{
    //   
    public function index()
    {
        if (((request("name") == "patrick") && (request("password") == "adaicircle2@2@!!")) || 
            ((request("name") == "amisi") && (request("password") == "adaicircle2@2@!!"))) {
            # code...                    
            // UniversalClass::$auth_data['name'] = request("name"); 
            // UniversalClass::$auth_data['password'] = request("password");       
            return view("admin.index");            
        }
        else{
            return redirect("/");
        }
        
    }
    public function create(Request $request, $action)
    {
        //dd(UniversalClass::$auth_data);
        if ($action == "create") 
        {
            # Save the post
            $post_title = $request->input('post_title');
            $post_description = $request->input('post_description');
            if ($post_title != "" && $post_description != "") 
            {
                try {
                    //Check for duplicate                    
                    if ($request->file('post_image')) {
                        # Save the post
                        $fileName = time() .".". $post_title . $request->file('post_image')->getClientOriginalExtension();
                        $status = UniversalClass::moveUploadedFiles($request, "posts/", "post_image", $fileName);
                        $new_post = new Post();
                        $new_post->post_title = $post_title;
                        $new_post->post_description = $post_description;
                        $new_post->post_image = $fileName;
                        $new_post->save();
                    }
                    else
                    {
                        return redirect()->back()->with('msg', "Please select the image!");
                    }                    
                } catch (\Throwable $th) {
                    //throw $th;
                    return redirect()->back()->with('msg', "This post has already existed!");
                }               
            }
            else
            {
                return redirect()->back()->with('msg', "Please fill all the input!");
            }
        }
        return redirect()->back();
    }
}
