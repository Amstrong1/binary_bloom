<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Requests\StoreNewsletterSubscriberRequest;

class NewsletterSubscriberController extends Controller
{
    public function store(StoreNewsletterSubscriberRequest $request)
    {
        $newsletterSubscriber = new NewsletterSubscriber();

        $newsletterSubscriber->email = $request->email;

        if ( $newsletterSubscriber->save()) {
            Alert::toast('Merci de votre souscription', 'success');
            return redirect('/');
        } else {
            Alert::toast('Une erreur est survenue', 'error');
            return redirect()->back()->withInput($request->input());
        }
    }
}
