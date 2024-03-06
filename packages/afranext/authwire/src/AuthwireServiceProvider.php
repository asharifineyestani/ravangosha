<?php


namespace Afranext\Authwire;



use Afranext\Authwire\App\Livewire\Authwire;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Livewire;

class AuthwireServiceProvider extends ServiceProvider
{



    public function boot(\Illuminate\Routing\Router $router)
    {
        Livewire::component('authwire', Authwire::class);

//        $this->routeFiles();

        $this->configFiles();

        $this->viewFiles();

    }


    public function register(){
        $this->app->afterResolving(BladeCompiler::class, function () {
            Livewire::component('authwire', Authwire::class);
        });
    }


    public function routeFiles()
    {
        include __DIR__ . '/routes/authwire.php';

    }


    public function viewFiles()
    {
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'authwire');
    }


    public function configFiles()
    {
        $this->mergeConfigFrom(__DIR__ . '/config/afranext/authwire.php', 'authwire');
    }







}
