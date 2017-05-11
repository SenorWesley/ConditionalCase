<?php

namespace SenorWesley\ConditionalCase;

Abstract class AbstractCase
{
    protected $target;

    /**
     * Set the target for this case.
     *
     * @param $target
     * @return Void
     */
    protected function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * Get the target for this case.
     *
     * @return Mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    protected abstract function conditions();

    protected abstract function actions();
}