<?php

namespace SenorWesley\ConditionalCase\Commands;


use Illuminate\Console\GeneratorCommand;

class ActionMakeCommand extends GeneratorCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:action';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new action';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Action';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/action.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $name
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return 'App\Cases\Actions';
    }
}