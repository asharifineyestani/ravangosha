<?php

namespace Afranext\Authwire\App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifyCode extends Model
{
    use HasFactory;


    protected $fillable = [
        'mobile',
        'device_id',
        'ip',
        'code',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'mobile','mobile');
    }

}
