<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Order::class);
        $this->crud->setEntity('orders');
    }



    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('user_id');
        $this->crud->setColumn('total_price');
        $this->crud->setColumn('description');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField([
            'method' => 'user',
            'type' => 'relation',
            'attribute' => 'name',
        ]);


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'total_price',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'textarea',
                'name' => 'description',
                'validation' => 'required | string',
            ]
        );


    }





}
