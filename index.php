<?php

require __DIR__ . '/vendor/autoload.php';

// Strategy ////////////////////////////////////////////////////////////////////
$flying_quacking_duck = new strategy\Controllers\Duck(
    new strategy\Behaviours\Fly\Wings(),
    new strategy\Behaviours\Quack\Quack()
);

echo $flying_quacking_duck->swim() . PHP_EOL;
echo $flying_quacking_duck->display() . PHP_EOL;
echo $flying_quacking_duck->performFly() . PHP_EOL;
echo $flying_quacking_duck->performQuack() . PHP_EOL;

echo "But now…" . PHP_EOL;
echo $flying_quacking_duck->setFlyBehaviour(new strategy\Behaviours\Fly\NoWay()) . PHP_EOL;
echo $flying_quacking_duck->setQuackBehaviour(new strategy\Behaviours\Quack\Squeek()) . PHP_EOL;

echo $flying_quacking_duck->performFly() . PHP_EOL;
echo $flying_quacking_duck->performQuack() . PHP_EOL;
