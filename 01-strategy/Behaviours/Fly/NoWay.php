<?php

namespace strategy\Behaviours\Fly;

class NoWay implements FlyBehaviour
{
    public function fly()
    {
        return "I’m ground bound.";
    }
}
