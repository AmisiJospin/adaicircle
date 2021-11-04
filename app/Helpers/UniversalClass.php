<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Auth;
use File;

class UniversalClass{
    public static $questions = 0;
    public static $auth_data = [

    ];
    public function __construct(){
        // Initializing global variables
    }
    public static function moveUploadedFiles(Request $request, $destinationPath, $inputName, $fileName){
        try {
            //Check if the file exists or not, if it exists move the uploaded file to that path, if it is not 
            //Create the folder and then move the uploaded file.
            //if (Auth::user()->id != 0 && Auth::user()->account_type == "administrator") {
                if($file = $request->file($inputName)){
                    //Creating the filename  
                    $destinationPath = public_path($destinationPath);                    
                    if (!File::exists($destinationPath)) {
                            # code...
                            File::makeDirectory($destinationPath, 0777, true, true);
                    } 
                    $file->move($destinationPath, $fileName);
                    // Save the changes to the database 
                    return [
                        'status' => TRUE, 
                        'message' => "Successfully moved to ". $destinationPath
                    ];
                    //return redirect('/teacher/account/'. Auth::user()->id);
                }
                return FALSE;
            //}
                
        } catch (\Throwable $th) {
                //throw $th;
                              
            return [
                "status" => FALSE,
                "message" => $th->getMessage()
                ];
        }
    }
   
}

?>