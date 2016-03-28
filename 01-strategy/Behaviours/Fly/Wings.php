<?php

namespace strategy\Behaviours\Fly;

class Wings implements FlyBehaviour
{
    public function fly()
    {
        return "I’m flapping my wings.";
    }
}
