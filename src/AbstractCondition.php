<?php

namespace SenorWesley\ConditionalCase;


abstract class AbstractCondition
{
    protected $target;

    /**
     * AbstractCondition constructor.
     * Set the target for this condition.
     *
     * @param $target
     */
    public function __construct($target)
    {
        $this->target = $target;
    }
    
    protected abstract function check();
    protected abstract function failed();
    protected abstract function passed();

}