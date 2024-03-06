<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Game;
use App\Models\Http\Controllers\Controller;
use App\Models\User;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class GameController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Game::class);
        $this->crud->setEntity('games');
        $this->crud->customActions(['create','read','edit']);
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('host_id')->format('host_name');
        $this->crud->setColumn('guest_id')->format('guest_name');
        $this->crud->setColumn('event_date' )->format('event_date');
        $this->crud->setColumn('event_time' );
        $this->crud->setColumn('action');
    }






    public function setupCreate()
    {

        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'host',
                'attribute' => 'name',

            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'host_goal',
            ]
        );



        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'guest',
                'attribute' => 'name',

            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'guest_goal',
            ]
        );



        $this->crud->setField(
            [
                'type' => 'persian_datepicker',
                'name' => 'event_date',

            ]
        );




        $this->crud->setField(
            [
                'type' => 'time',
                'name' => 'event_time',

            ]
        );


        $this->crud->setField(
            [
                'type' => 'url',
                'name' => 'link_ticket',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'url',
                'name' => 'link_report',
            ]
        );





    }



    public function setupEdit()
    {
        $this->setupCreate();

    }





}
