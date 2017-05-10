<?php

namespace SenorWesley\ConditionalCase;

use Illuminate\Support\ServiceProvider as AbstractServiceProvider;

class ServiceProvider extends AbstractServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() : Void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\CaseMakeCommand::class,
                Commands\ConditionMakeCommand::class,
                Commands\ActionMakeCommand::class,
            ]);
        }
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() : Void
    {
        //
    }
}
