<?php

namespace SenorWesley\ConditionalCase;

use Illuminate\Bus\Queueable;

abstract class AbstractAction
{
    use Queueable;

    protected abstract function handle();
}