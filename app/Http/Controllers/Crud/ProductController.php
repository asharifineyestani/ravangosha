<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Product::class);
        $this->crud->setEntity('products');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('title');
        $this->crud->setColumn('description');
        $this->crud->setColumn('category_id');
        $this->crud->setColumn('user_id');
        $this->crud->setColumn('avatar_path');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'title',
                'validation' => 'required | string',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'textarea',
                'name' => 'description',
                'validation' => 'required | string',
            ]
        );

        $this->crud->setField([
            'method' => 'category',
            'type' => 'relation',
            'attribute' => 'title',
        ]);


        $this->crud->setField([
            'method' => 'user',
            'type' => 'relation',
            'attribute' => 'name',
        ]);


        $this->crud->setField([
            'name' => "avatar_path",
            'type' => 'image',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop' => true,      // set to true to allow cropping, false to disable
        ]);



    }





}
