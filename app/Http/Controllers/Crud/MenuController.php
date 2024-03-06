<?php




namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use Afracode\CRUD\App\Models\Menu;
use Illuminate\Support\Facades\Auth;


class MenuController extends CrudController
{
    public function config()
    {
        $this->crud->setModel(\Afranext\Crud\app\Models\Menu::class);
        $this->crud->SetEntity('top-menu');
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('href');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setField([
            'name' => 'name'
        ]);


        $this->crud->setField([
            'name' => 'icon'
        ]);

        $this->crud->setField([
            'name' => 'permission'
        ]);
    }



}
