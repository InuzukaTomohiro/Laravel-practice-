<?php

namespace App\Repositories;

interface RollableDice
{
  public function roll(): int;
}