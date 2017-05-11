<?php

namespace SenorWesley\ConditionalCase;


use Illuminate\Foundation\Bus\DispatchesJobs;
use SenorWesley\ConditionalCase\Exceptions\ConditionsNotMetException;
use SenorWesley\ConditionalCase\Exceptions\NoConditionsException;

class ConditionalCase
{
    use DispatchesJobs;

    private $case;

    /**
     * ConditionalCase constructor.
     * @param $case
     */
    public function __construct($case)
    {
        $this->case = new $case;
    }

    /**
     * Check if the case checks all the correct boxes
     *
     * @return Bool
     * @throws NoConditionsException
     */
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

    /**
     * Fire all actions associated with a case if all conditions are met.
     */
    protected function fire() : Void
    {
        $actions = $this->case->actions();

        foreach ($actions as $action) {
            $this->dispatch(new $action());
        }
    }

    /**
     * Check if all conditions are met. If they are, fire all events. if they're not, throw an exception.
     *
     * @return Void
     * @throws ConditionsNotMetException
     * @throws NoConditionsException
     */
    public function handle() : Void
    {
        if ($this->check()) {
            $this->fire();

            return;
        }
        
        throw new ConditionsNotMetException();
    }
}