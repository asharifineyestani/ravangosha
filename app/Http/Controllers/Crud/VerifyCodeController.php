<?php




namespace App\Http\Controllers\Crud;

use Afranext\Authwire\App\Models\VerifyCode;
use Afranext\Crud\App\Controllers\CrudController;
use Afracode\CRUD\App\Models\Menu;
use Illuminate\Support\Facades\Auth;


class VerifyCodeController extends CrudController
{
    public function config()
    {
        $this->crud->setModel(VerifyCode::class);
        $this->crud->SetEntity('verify_codes');

    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('mobile');
        $this->crud->setColumn('ip');
        $this->crud->setColumn('code');
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
