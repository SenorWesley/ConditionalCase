<?php

namespace SenorWesley\ConditionalCase;


abstract class AbstractCondition
{
    protected $target;

    public function __construct($target)
    {
        $this->target = $target;
    }
    
    protected abstract function check();
    protected abstract function failed();
    protected abstract function passed();

}