<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class MessageController extends Controller
{
    public function sendMail(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'subject'=>'required',
            'message' =>'required'
            
        ]);

        $path='/upload';
        $newname=Helper::renameFile($path,$request->file('piecejoint')->getClientOriginalName());
        $upload=$request->piecejoint->move(public_path($path),$newname);

        
        if ($this->isOnline()) {
            $mail_data=[
                'recipient'=>'mamemoussandoye5@gmail.com',
                'fromEmail'=>$request->email,
                'formName'=>$request->name,
                'subject'=>$request->subject,
                'body'=>$request->message,
                'piecejoint'=>$request->file('piecejoint')->getClientOriginalName()
            ];

          //  dd($mail_data);
            // if (!preg_match("^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$",$mail_data['fromEmail'])) {
            //     return redirect()->back()->withInput()->with('errormail','incorrect email address');
            //   }
        
          
            Mail::send('email-template',$mail_data,function($message)use($mail_data){
                $message->to($mail_data['fromEmail'])
                        ->from($mail_data['recipient'])
                        ->subject($mail_data['subject'])
                        ->attach(public_path('upload/'.$mail_data['piecejoint']));
            });
            return redirect()->back()->with('success', 'Email send successfully');
        }else{
            return redirect()->back()->withInput()->with('error','Check your internet connection');
        }
    }



    public function isOnline($site="https://youtube.com/"){
        if (@fopen($site,'r')) {

            return true;
        }else{
            return false;
        }
    }
}
