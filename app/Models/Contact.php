<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;

    public $guarded = [];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot()
    {

        parent::boot();

        static::created(function ($item) {
            $adminEmail = "contact@binarybloom.tech";

            $voltaire = 'voltairefadonougbo@gmail.com';
            $romuald = 'romulad91303142@gmail.com';
            $lewis = 'lewishoundje@gmail.com';

            Mail::to($adminEmail)->send(new ContactMail($item));
            Mail::to($voltaire)->send(new ContactMail($item));
            Mail::to($romuald)->send(new ContactMail($item));
            Mail::to($lewis)->send(new ContactMail($item));
        });
    }
}
