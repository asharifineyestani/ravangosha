<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminController extends UserController
{

    public function config()
    {
        $this->crud->setModel(User::class);
        $this->crud->setEntity('admins');
       $this->crud->query->whereHas('roles', function ($query) {
        $query->where('name', '<>','user');
    })->get();;
    }


    public function setupCreate()
    {

        $this->crud->setField(
            [
                'name' => 'first_name',
                'validation' => 'required|string',
            ]
        );

        $this->crud->setField(
            [
                'name' => 'last_name',
                'validation' => 'required|string',
            ]
        );



        $this->crud->setField(
            [
                'name' => 'mobile',
                'validation' => 'required|unique:users,mobile',
            ]
        );





        $this->crud->setField(
            [
                'type' => 'password',
                'name' => 'password',
            ]
        );





        $this->crud->setField([
            'name' => "avatar",
            'type' => 'image',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop' => true,      // set to true to allow cropping, false to disable
        ]);

        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'roles',
                'attribute' => 'name',

            ]
        );

        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'permissions',
                'attribute' => 'name',

            ]
        );



    }


    public function setupEdit()
    {
        $this->setupCreate();


        $this->crud->setField(
            [
                'name' => 'mobile',
                'validation' => 'required|unique:users,mobile,' . $this->crud->row->id,
            ]
        );

        $this->crud->setField(
            [
                'type' => 'email',
                'name' => 'email',
                'validation' => 'unique:users,email,' . $this->crud->row->id,

            ]
        );


    }


}
