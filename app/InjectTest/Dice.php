<?php

namespace App\InjectTest;

use App\Repositories\RollableDice;

class Dice implements RollableDice
{
  public function roll():int
  {
    return mt_rand(1, 6);
  }
}