<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Team::class);
        $this->crud->setEntity('teams');
        $this->crud->customActions(['create', 'read', 'edit', 'delete']);
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('logo_path')->format('team_logo');
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


        $this->crud->setField([
            'name' => "logo_path",
            'type' => 'image',
            'aspect_ratio' => 1, // set to 0 to allow any aspect ratio
            'crop' => true,      // set to true to allow cropping, false to disable
        ]);


    }


}
