<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;

class OrderItemController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(OrderItem::class);
        $this->crud->setEntity('order-items');
    }


    public function setupIndex()
    {

        $this->crud->setColumn('id');
        $this->crud->setColumn('stock_id');
        $this->crud->setColumn('order_id');
        $this->crud->setColumn('quantity');
        $this->crud->setColumn('price');
    }


    public function setupCreate()
    {

        $this->crud->setField([
            'method' => 'order',
            'type' => 'relation',
            'attribute' => 'id',
            'label' => 'سفارش',
        ]);

        $this->crud->setField([
            'method' => 'stock',
            'type' => 'relation',
            'attribute' => 'id',
            'label' => 'انبار',
        ]);

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'quantity',
                'validation' => 'required | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'price',
                'validation' => 'required | integer',
            ]
        );




    }





}
