<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class ImageController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Image::class);
        $this->crud->setEntity('images');
        $this->crud->query;
    }


    public function setupIndex()
    {
        $this->crud->setColumn('id' );
        $this->crud->setColumn('title' );
        $this->crud->setColumn('created_at')->format('shamsi');
        $this->crud->setColumn('action');
    }



    public function setupCreate()
    {

        $this->crud->setSecureField([
            'key' => 'user_id',
            'value' => \Auth::id(),
        ]);



        $this->crud->setField(
            [
                'name' => 'title',
                'validation' => 'required | string',
            ]
        );



        $this->crud->setField([
            'name' => "path",
            'type' => 'image',
            'crop' => true,      // set to true to allow cropping, false to disable
        ]);




    }


    public function setupEdit()
    {
        $this->setupCreate();
    }

}
