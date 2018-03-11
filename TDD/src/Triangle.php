<?php
declare(strict_types=1);

final class Triangle
{
  public function checkIfThreeRealNumberMakeAnTriangle(int $a, int $b, int $c){
    if($a > 0 && $b > 0 && $c > 0){
      if($a + $b > $c && $b + $c > $a && $c + $a > $b){
        return 'Satisfied';
      } else {
        return 'Unsatisfied';
      }
    }else {
      return 'Invalid';
    }
  }
}