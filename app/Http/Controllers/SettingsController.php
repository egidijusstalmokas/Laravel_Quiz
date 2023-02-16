<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Info;
use App\Models\FrontImg;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File; 

class SettingsController extends Controller
{
    public function main()
    {
        return view('admin.settings.main');
    }

    public function info()
    {
        $title = Info::select('id', 'value')->where('type', 'title')->first();
        $email = Info::select('id', 'value')->where('type', 'email')->first();
        return view('admin.settings.info', compact('title', 'email'));
    }

    public function updateInfo(Request $request)
    {
        $message = "Information was saved";
        $messageType = "success";
        $validator = Validator::make($request->all(), [ 
            'title' => 'required|string|max:255',
            'email' => 'required|string|email',
        ]);
        $messages = $validator->errors();
        if($messages->isEmpty()){
            $title = Info::select('id', 'value')->where('type', 'title')->first();
            $title->value = $request->title;
            $title->save();
            $email = Info::select('id', 'value')->where('type', 'email')->first();
            $email->value = $request->email;
            $email->save();
        }else {
            $message = "The data provided is incorrect, please check and repeat the operation.";
            $messageType = "error";
        }
        return redirect()->back()->with($messageType, $message); 
    }

    public function logo()
    {
        $logo = Info::select('id', 'value')->where('type', 'logo')->first();
        return view('admin.settings.logo', compact('logo'));
    }

    public function updateLogo(Request $request)
    {
        $message = "Logo was saved";
        $messageType = "success";
        $validator = Validator::make($request->all(), [ 
            'logo' => 'required|mimes:jpeg,png,jpg,gif,svg,webp',
        ]);
        $messages = $validator->errors();
        if($messages->isEmpty()){
            $logo = Info::select('id', 'value')->where('type', 'logo')->first();
            $logoName = time().'.'.$request->logo->extension();  
            $request->logo->move('logo/', $logoName);
            $logo->value =  $logoName;
            $logo->save();
        }else{
            $message = "Selected file format is unsuported. Please select another file.";
            $messageType = "error";
        }
        return redirect()->back()->with($messageType, $message); 
    }

    public function editImages()
    {
        $quizImages = FrontImg::select('id', 'img')->where('type', 'quiz')->get();
        return view('admin.settings.editImages', compact('quizImages'));
    }

    public function storeImages(Request $request)
    {
        $message = "Operation was successful";
        $messageType = "success";
        $validator = Validator::make($request->all(), [ 
            'gallery.*' => 'mimes:jpeg,png,jpg,gif,svg,webp,JPG',
        ]);

        $messages = $validator->errors();
        if($messages->isEmpty()){
            if($request->hasfile('gallery')){
                foreach($request->file('gallery') as $key => $file)
                {
                    $name = Str::random(15).'-'.time().'.'.$file->extension();
                    $file->move('quiz/random/', $name);  
                    $img = new FrontImg;
                    $img->img = $name; 
                    $img->type = "quiz";
                    $img->save();
                } 
            }
        }else {
            $message = "An error occurred, please try again later.";
            $messageType = "error";
        }
        return redirect()->back()->with($messageType, $message);
    }

    public function destroyImage(FrontImg $quizImage)
    {
        $message = "Operation was successful";
        $messageType = "success";
        File::delete(public_path('/quiz/random/' . $quizImage->img));
        $quizImage->delete();
        return redirect()->back()->with($messageType, $message); 
    }
}
