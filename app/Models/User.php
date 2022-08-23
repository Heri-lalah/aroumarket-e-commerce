<?php

namespace App\Models;

use App\Models\Command;
use App\Models\UserAvance;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Gate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'firstName',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function commands()
    {

        return $this->hasMany(Command::class);

    }


    public function scopeAdmin($query)
    {

        return $query->where('admin', true);

    }


    public function scopeGuest($query)
    {

        return $query->where('admin', false);

    }


    public function scopeShowUser($query, $type)
    {

        if($type==1){
            return $query->where('admin', true);
        }else{
            return $query->where('admin', false);
        }

    }
}
