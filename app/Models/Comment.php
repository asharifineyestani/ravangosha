<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['body','user_id','rating'];

    public function commentable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function addRating($rating)
    {
        // اگر کاربر امتیاز نداده باشد، امتیاز را ایجاد کن
        if (!$this->rating) {
            $this->rating = $rating;
            $this->save();
        }
    }


}
