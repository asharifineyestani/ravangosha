<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Stock;
use App\Models\User;
use Illuminate\Http\Request;

class StockController extends CrudController
{

    protected $fillable = [
        "product_id",
        "price",
        "discount_percent",
        "quantity",
        "size",
    ];

    public function config()
    {
        $this->crud->setModel(Stock::class);
        $this->crud->setEntity('stocks');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('product_id');
        $this->crud->setColumn('price');
        $this->crud->setColumn('discount_percent');
        $this->crud->setColumn('quantity');
        $this->crud->setColumn('size');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField([
            'method' => 'product',
            'type' => 'relation',
            'attribute' => 'title',
        ]);

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'price',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'discount_percent',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'quantity',
                'validation' => 'required | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'size',
                'validation' => 'required | string',
            ]
        );



    }





}
