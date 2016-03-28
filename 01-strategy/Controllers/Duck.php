<?php

namespace strategy\Controllers;

use strategy\Behaviours\Fly\FlyBehaviour;
use strategy\Behaviours\Quack\QuackBehaviour;

class Duck
{
    protected $fly;
    protected $quack;

    public function __construct(FlyBehaviour $fly, QuackBehaviour $quack)
    {
        $this->fly = $fly;
        $this->quack = $quack;
    }

    public function setFlyBehaviour(FlyBehaviour $fly)
    {
        $this->fly = $fly;
    }

    public function setQuackBehaviour(QuackBehaviour $quack)
    {
        $this->quack = $quack;
    }

    public function swim()
    {
        return "I’m swimming.";
    }

    public function display()
    {
        return "I’m displaying.";
    }

    public function performFly()
    {
        return $this->fly->fly();
    }

    public function performQuack()
    {
        return $this->quack->quack();
    }
}
