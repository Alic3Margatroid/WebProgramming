<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers OneVariableQuadratic
 */
final class OneVariableQuadraticTest extends TestCase
{
  
	public function testCheckIfEquationHasTwoCorrectRoot()
	{
		$a = 1;
		$b = 3;
		$c = 2;
		$expectedResult = array(-1, -2);
    $result = OneVariableQuadratic::solveOneVariableQuadraticFunction($a, $b, $c);
    $this->assertEquals(2, count($result));
    $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
	}

  public function testCheckIfEquationHasTwoCorrectDuplicateRoot(){
    $a = 1;
		$b = 2;
		$c = 1;
		$expectedResult = array(-1, -1);
    $result = OneVariableQuadratic::solveOneVariableQuadraticFunction($a, $b, $c);
    $this->assertEquals(2, count($result));
    $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
  }

  public function testCheckIfEquationHasOnlyOneCorrectRoot(){
    $a = 0;
		$b = 1;
		$c = 1;
		$expectedResult = array(-1);
    $result = OneVariableQuadratic::solveOneVariableQuadraticFunction($a, $b, $c);
    $this->assertEquals(1, count($result));
    $this->assertEquals($expectedResult, $result, "\$canonicalize = true", $delta = 0.0, $maxDepth = 10, $canonicalize = true);
  }

  public function testCheckIfEquationHasNoRoot(){
    $a = 1;
		$b = 1;
		$c = 1;
		$expectedResult = array();
    $result = OneVariableQuadratic::solveOneVariableQuadraticFunction($a, $b, $c);
    $this->assertEquals(0, count($result));
  }
}