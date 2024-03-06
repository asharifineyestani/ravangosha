<?php

namespace Afranext\Crud\app\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable = [
        'name',
        'href',
        'icon',
        'parent_id',
        'group',
        'order',
        'permission',
    ];


    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }


    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id');
    }
}
