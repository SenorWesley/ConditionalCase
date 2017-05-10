<?php

namespace SenorWesley\ConditionalCase;

Abstract class AbstractCase
{
    protected $target;

    protected function setTarget($target) : Void
    {
        $this->target = $target;
    }

    protected function getTarget() : Mixed
    {
        return $this->target;
    }

    protected abstract function conditions();

    protected abstract function actions();
}