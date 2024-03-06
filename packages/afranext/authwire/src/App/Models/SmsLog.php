<?php

namespace Afranext\Authwire\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SmsLog extends Model
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
