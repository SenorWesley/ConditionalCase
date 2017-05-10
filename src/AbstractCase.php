<?php

namespace SenorWesley\ConditionalCase;

Abstract class AbstractCase
{
    protected $target;

    protected function setTarget($target)
    {
        $this->target = $target;
    }

    protected abstract function conditions();

    protected abstract function actions();
}