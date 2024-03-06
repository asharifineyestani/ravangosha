<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class MessageController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Message::class);
        $this->crud->setEntity('messages');
        $this->crud->customActions(['read','delete']);
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('mobile');
        $this->crud->setColumn('created_at' )->format('shamsi');
        $this->crud->setColumn('action');
    }



    public function setupCreate()
    {

        $this->crud->setField(
            [
                'name' => 'name',
            ]
        );
        $this->crud->setField(
            [
                'name' => 'mobile',
            ]
        );
        $this->crud->setField(
            [
                'name' => 'email',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'textarea',
                'name' => 'body',
            ]
        );



    }








}
