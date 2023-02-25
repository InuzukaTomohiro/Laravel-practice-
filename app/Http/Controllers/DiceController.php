<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InjectTest\Dice;
use App\InjectTest\LoadedDice;
use App;
use App\Repositories\RollableDice;

class DiceController extends Controller
{

  private $dice;

  public function __construct(RollableDice $dice)
  {
    $this->dice = $dice;
  }

  public function rollDouble()
  {

    //テスト中はイカサマダイスを、それ以外は普通のダイスをインスタンス化
    // if (App::environment('testing')) {
    //     $dice = new LoadedDice();
    // } else {
    //     $dice = new Dice();
    // }

    

    $totalDice =  $this->dice->roll() + $this->dice->roll();

    return view('dice.index', compact('totalDice'));
  }
}
