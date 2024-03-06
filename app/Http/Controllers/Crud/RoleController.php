<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Variable;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;

class RoleController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Role::class);
        $this->crud->setEntity('roles');
        $this->crud->query->where('name', '<>', 'super-admin');
//        $this->crud->customActions(['edit']);
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id');
        $this->crud->setColumn('name');
        $this->crud->setColumn('action');
    }


    public function setupCreate()
    {

        $this->crud->setSecureField([
            'key' => 'guard',
            'value' => 'web',
        ]);


        $this->crud->setField([
            'name' => 'name',
            'type' => 'text',
            'label' => 'نام',
        ]);


        $this->crud->setField([
            'method' => 'permissions',
            'type' => 'relation',
            'attribute' => 'name_fa',
        ]);
    }


    public function setupEdit()
    {
        $this->setupCreate();
    }

    public function update(Request $request, $id)
    {



        $this->crud->setRow($id);
        $this->setupEdit();


        $this->validate($request, array_merge($this->crud->getValidations()));

        $inputs = $this->crud->getFormInputs($request);



        $role = \Spatie\Permission\Models\Role::find($id);

        $role->update($inputs);
        $permissions = [];

        foreach($inputs['permissions'] as $permissionId) {
            $permissions[] = Permission::find($permissionId);
        }

        $role->syncPermissions($permissions);



        return redirect()->back()->with('success', trans('message.updated'));
    }


}
