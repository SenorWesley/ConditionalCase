<?php

namespace SenorWesley\ConditionalCase\Commands;


use Illuminate\Console\GeneratorCommand;

class ConditionMakeCommand extends GeneratorCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:condition';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new condition';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Condition';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub() : String
    {
        return __DIR__ . '/Stubs/condition.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $name
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace) : String
    {
        return 'App\Cases\Conditions';
    }
}