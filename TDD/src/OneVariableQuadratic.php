<?php
declare(strict_types=1);

final class OneVariableQuadratic
{
  public function solveOneVariableQuadraticFunction(float $a, float $b, float $c){
    echo $a;
    if($a == 0){
      return array(-$c/$b);
    }
    $delta = $b*$b - 4*$a*$c;
    if($delta >= 0){
      $root1 = (-$b + sqrt($delta))/(2*$a);
      $root2 = (-$b - sqrt($delta))/(2*$a);
      return array($root1, $root2);
    } else {
      return array();      
    }
  }
}