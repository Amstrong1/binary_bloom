<?php

namespace App\Http\Controllers;

use App\Models\Contact;
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
        
        Alert::toast('Merci de nous avoir contacter. Vous recevrez une réponse sous peu', 'success');
        return redirect()->back();
    }
}
