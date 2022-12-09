<?php

namespace App\Models;

use App\Models\Command;
use App\Models\Product;
use App\Models\Order;
use App\Models\UserAvance;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Gate;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
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
