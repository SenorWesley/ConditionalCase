<?php

namespace SenorWesley\ConditionalCase;


abstract class AbstractCondition
{
    protected abstract function check();
    protected abstract function failed();
    protected abstract function passed();

}