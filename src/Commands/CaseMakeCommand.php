<?php

namespace SenorWesley\ConditionalCase\Commands;


use Illuminate\Console\GeneratorCommand;

class CaseMakeCommand extends GeneratorCommand
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:case';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new case';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Case';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/case.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $name
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return 'App\Cases';
    }
}