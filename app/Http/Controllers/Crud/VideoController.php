<?php

namespace App\Http\Controllers\Crud;

use Afranext\Crud\App\Controllers\CrudController;
use App\Models\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Video;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Http\Request;

class VideoController extends CrudController
{


    public function config()
    {
        $this->crud->setModel(Video::class);
        $this->crud->setEntity('videos');
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

//
//        $this->crud->setField(
//            [
//                'name' => 'body',
//                'type' => 'tinymce_rtl',
//                'validation' => 'required|string',
//            ]
//        );





        $this->crud->setField([
            'name' => "thumbnail_path",
            'type' => 'image',
            'aspect_ratio' => 404 / 269, // set to 0 to allow any aspect ratio
            'crop' => true,      // set to true to allow cropping, false to disable
        ]);


        $this->crud->setField(
            [
                'type' => 'text',
                'name' => 'path',
            ]
        );



    }


    public function setupEdit()
    {
        $this->setupCreate();
    }

}
