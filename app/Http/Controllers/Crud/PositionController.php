<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\Category;
use App\Models\Http\Controllers\Controller;
use App\Models\Position;
use App\Models\User;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class PositionController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Position::class);
        $this->crud->setEntity('positions');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('title');
        $this->crud->setColumn('title_en');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField(
            [
                'name' => 'title',
                'validation' => 'required | string',
            ]
        );

        $this->crud->setField(
            [
                'name' => 'title_en',
                'validation' => 'nullable | string',
            ]
        );


    }


}
