<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Role;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class SellerController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Seller::class);
        $this->crud->setEntity('sellers');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('mobile');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'name',
                'validation' => 'required | string',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'mobile',
                'validation' => 'required | string',
            ]
        );






    }


}
