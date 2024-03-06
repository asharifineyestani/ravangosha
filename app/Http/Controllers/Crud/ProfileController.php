<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Prophecy\Argument\Token\ArrayEntryToken;

class ProfileController extends UserController
{
    public function config()
    {
        $this->crud->setModel(\App\Models\User::class);
        $this->crud->setEntity('profile');
        $this->crud->query->where('id', \Auth::id());
    }

    public function edit($id = null)
    {
        return Parent::edit(\Auth::id());
    }

    public function setupCreate()
    {
        parent::setupCreate();
//
        $this->crud->removeField('roles');
        $this->crud->removeField('permissions');
        $this->crud->removeField('password');

    }

    public function show($id = null)
    {
        return parent::show(\Auth::id());
    }
}
