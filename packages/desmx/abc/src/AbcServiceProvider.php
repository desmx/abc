<?php
namespace Desmx\Abc;
use Illuminate\Support\ServiceProvider;
class AbcServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
/**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}