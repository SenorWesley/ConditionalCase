<?php

namespace SenorWesley\ConditionalCase;


use Illuminate\Foundation\Bus\DispatchesJobs;
use SenorWesley\ConditionalCase\Exceptions\NoConditionsException;

class ConditionalCase
{
    use DispatchesJobs;

    private $case;


    public function setCase(AbstractCase $case) : Void
    {
        $this->case = new $case;
    }

    private function check() : Bool {
        $conditions = $this->case->conditions();

        
        foreach ($conditions as $condition) {
            $condition = new $condition($this->case->getTarget());

            if ($condition->check()) {
                $condition->passed();

                return true;
            }

            $condition->failed();
            return false;
        }

        throw new NoConditionsException();
    }

    public function dispatch() : mixed
    {
        $actions = $this->case->actions();

        foreach ($actions as $action) {
            $this->dispatch(new $action());
        }
    }
}