<?php

namespace strategy\Behaviours\Quack;

class Quack implements QuackBehaviour
{
    public function quack()
    {
        return "I’m quacking.";
    }
}
