<?php

namespace App\InjectTest;

use App\Repositories\RollableDice;

class LoadedDice implements RollableDice
{
  public function roll(): int
  {
    return 6;
  }
}