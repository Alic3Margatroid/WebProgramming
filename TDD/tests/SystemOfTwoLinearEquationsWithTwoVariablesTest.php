<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class SystemOfTwoLinearEquationsWithTwoVariablesTest extends TestCase{
    public function testCheckIfSystemHasOneSetOfSolutions(){
        $a = 6;
        $b = 1;
        $c = 3;
        $d = 2;
        $m = 8;
        $n = 7;
        $expectedResult = 1;
        $result = SystemOfTwoEquationsWithTwoVariables::solution($a,$b,$c,$d,$m,$n);
        $this->assertEquals(1, $result);
        $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }

    public function testCheckIfSystemHasInfiniteSolutions(){
        $a = 2;
        $b = 2;
        $c = 1;
        $d = 1;
        $m = 2;
        $n = 1;
        $expectedResult = 0;
        $result = SystemOfTwoEquationsWithTwoVariables::solution($a,$b,$c,$d,$m,$n);
        $this->assertEquals(0, $result);
        $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
    }

    public function testCheckIfSystemHasNoSolution(){
        $a = 2;
        $b = 2;
        $c = 1;
        $d = 1;
        $m = 3;
        $n = 4;    
        $expectedResult = -1;
        $result = SystemOfTwoEquationsWithTwoVariables::solution($a,$b,$c,$d,$m,$n);
        $this->assertEquals(-1, $result);
        $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);    
    }
}
