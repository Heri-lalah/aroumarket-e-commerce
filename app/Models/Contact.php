<?php

namespace App\Models;

use App\Mail\ContactMailNotify;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'subject', 'message'];

    public  function user()
    {
        return $this->belongsTo(user::class);
    }

    public static function boot()
    {
        parent::boot();
        static::created(function($item){

            $adminEmail = env('MAIL_FROM_ADDRESS');
            Mail::to($adminEmail)->send(new ContactMailNotify($item));

        });
    }
}
