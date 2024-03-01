<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'book_image_url', 'author_id',
        'translator', 'publication', 'isbn', 'cover_type', 'size',
        'page_count', 'print_number', 'publish_date'
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function stocks()
    {
        return $this->hasMany(BookStock::class);
    }
}