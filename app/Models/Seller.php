<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller   extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'seller';

    protected $fillable = ['name', 'mobile', 'mobile_verified_at', 'image_url', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function stocks()
    {
        return $this->hasMany(BookStock::class);
    }
}
