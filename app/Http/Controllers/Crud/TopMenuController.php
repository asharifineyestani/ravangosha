<?php




namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use Afracode\CRUD\App\Models\Menu;
use Illuminate\Support\Facades\Auth;


class TopMenuController extends CrudController
{
    public function config()
    {
        $this->crud->setModel(\Afranext\Crud\app\Models\Menu::class);
        $this->crud->SetEntity('top-menu');
         $this->crud->query->where('group', 'TOP');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('parent_id');
        $this->crud->setColumn('href');
        $this->crud->setColumn('group');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setSecureField([
            'key' => 'group',
            'value' => 'TOP',
        ]);

        $this->crud->setField([
            'name' => 'name'
        ]);

        $this->crud->setField(
            [
                'type' => 'relation',
                'method' => 'parent',
                'attribute' => 'name',
            ]
        );



        $this->crud->setField([
            'name' => 'href'
        ]);


    }



}
