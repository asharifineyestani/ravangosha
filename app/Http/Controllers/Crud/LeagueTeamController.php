<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\City;
use App\Models\LeagueTeam;
use App\Models\Player;
use App\Models\User;
use Illuminate\Http\Request;

class LeagueTeamController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(LeagueTeam::class);
        $this->crud->setEntity('league-teams');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('team_id');
        $this->crud->setColumn('played');
        $this->crud->setColumn('won');
        $this->crud->setColumn('drawn');
        $this->crud->setColumn('lost');
        $this->crud->setColumn('goal_difference');
        $this->crud->setColumn('points');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {
        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'team',
                'attribute' => 'name',

            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'played',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'won',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'drawn',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'lost',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'goal_difference',
                'validation' => 'required | integer',
            ]
        );

        $this->crud->setField(
            [
                'type' => 'number',
                'name' => 'points',
                'validation' => 'required | integer',
            ]
        );





    }


}
