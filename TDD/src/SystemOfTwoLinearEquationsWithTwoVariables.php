<?php
declare(strict_types=1);

final class SystemOfTwoLinearEquationsWithTwoVariables{
    public function solution(float $a, float $b, float $c, float $d, float $m, float $n){
        $determinant = $a*$d - $b*$c;

        if($determinant != 0){
            $x = ($m*$d - $b*$n)/$determinant;
            $y = ($a*$n - $m*$c)/$determinant;
            return 1;
        }
        else
            if ((($m*$d - $b*$n) == 0) and (($a*$n - $m*$c) == 0))
                return 0;
            else
                return -1;
    }
}
