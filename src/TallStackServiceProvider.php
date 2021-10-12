<?php

namespace TallStackPackage\TallStack;
// teamupdivision/filestack-package
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;
use Laravel\Ui\UiCommand; 

class TallStackServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tallstack', function ($command) {
            TallStack::install();
            
            $command->info('Project setup with tallstack completed! Enjoy!');
        });
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
