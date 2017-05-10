<?php
    
namespace SenorWesley\ConditionalCase;

use Illuminate\Support\Facades\Facade as AbstractFacade;

class Facade extends AbstractFacade
{
    protected static function getFacadeAccessor() : String
    {
        return 'ConditionalCase';
    }
}