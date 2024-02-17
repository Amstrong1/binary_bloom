<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\ContactStoreRequest;

class ContactController extends Controller
{
    public function store(ContactStoreRequest $request)
    {  
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'object' => $request->subject,
            'message' => $request->message,
        ]);

        $message = new Contact();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->object = $request->subject;
        $message->message = $request->message;
        $message->save();
        
        $voltaire = 'voltairefadonougbo@gmail.com';
        $romuald = 'romuald91303142@gmail.com';
        $lewis = 'lewishoundje@gmail.com';
        Mail::to($voltaire)->send(new ContactMail($message));
        Mail::to($romuald)->send(new ContactMail($message));
        Mail::to($lewis)->send(new ContactMail($message));
        
        Alert::toast('Merci de nous avoir contacter. Vous recevrez une réponse sous peu', 'success');
        return redirect()->back();
    }
}
