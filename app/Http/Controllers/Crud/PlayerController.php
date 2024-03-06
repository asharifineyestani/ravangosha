<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class PlayerController extends CrudController
{
    protected $attributes = [
        'position' => '',
    ];



    public function config()
    {
        $this->crud->setModel(Player::class);
        $this->crud->setEntity('players');
        $this->crud->customActions(['create','read','edit','delete']);
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('number');
        $this->crud->setColumn('height');
        $this->crud->setColumn('birth_date');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'number',
                'validation' => 'required | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'name',
                'validation' => 'required | string',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'position',
                'validation' => 'required | |exists:positions,id',
                'attribute' => 'title',
            ]
        );



        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'nation',
                'value' => 'ایرانی',
                'validation' => 'required | string',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'height',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'persian_datepicker',
                'name' => 'birth_date',
                'validation' => 'required',
            ]
        );


        $this->crud->setField([
            'name' => 'preferred_foot',
            'type' => 'select2',
            'validation' => 'required | in:RIGHT,LEFT,BOTH',
            'options' => ['RIGHT' => 'راست', 'LEFT' => 'چپ', 'BOTH' => 'هردو'],
        ]);



//        $this->crud->setField([
//            'name' => "avatar_path",
//            'type' => 'image',
//            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
//            'crop' => true,      // set to true to allow cropping, false to disable
//            'validation' => 'required ',
//        ]);

//        $this->crud->setField([
//            'name' => "full_length_photo_path",
//            'type' => 'image',
//            'aspect_ratio' => 450/650, // set to 0 to allow any aspect ratio
//            'crop' => true,      // set to true to allow cropping, false to disable
//        ]);






        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'weight',
                'validation' => 'nullable | integer',

            ]
        );







        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'number_of_games',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'game_minutes',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'number_of_saves',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'dripping_percent',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'pass_accuracy_percent',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'physic_percent',
                'validation' => 'nullable | integer',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'persian_datepicker',
                'name' => 'added_date',
                'validation' => 'nullable',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'excerpt',
                'validation' => 'required | string',
            ]
        );


        $this->crud->setField(
            [
                'type' => 'textarea',
                'name' => 'bio',
                'validation' => 'nullable | string',
            ]
        );


    }


}
