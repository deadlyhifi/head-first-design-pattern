<?php

namespace strategy\Behaviours\Quack;

class Squeek implements QuackBehaviour
{
    public function quack()
    {
        return "I’m squeeking.";
    }
}
