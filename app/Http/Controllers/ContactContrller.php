<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactContrller extends Controller
{
    public function addContact(Request $request){
        // $request->validate([
        //     'fistName' =>'required',
        //     'lastName' =>'required',
        //     'email' =>'required|email',
        //     'phone' =>'required',
        //     'type' =>'required'
        // ]);

        $contact=new Contact();
        $contact->firstName=$request->firstName;
        $contact->lastName=$request->lastName;
        $contact->email=$request->email;
        $contact->phone=$request->phone;
        $contact->type=$request->type;
        $contact->save();
    }
}
