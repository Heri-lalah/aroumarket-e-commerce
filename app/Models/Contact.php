<?php

namespace App\Models;

use App\Mail\ContactMailNotify;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['email', 'subject', 'message','user_id'];

    public  function user()
    {
        return $this->belongsTo(user::class);
    }
}
