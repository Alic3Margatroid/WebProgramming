<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Triangle;

/**
 * @covers Triangle
 */
final class TriangleTest extends TestCase
{
	public function testThreeRealNumberAreNotAllPositive()
	{
		$a = -2;
		$b = 1;
		$c = 3;
		$result = 'Invalid';
		$this->assertEquals(
				$result,
				Triangle::checkIfThreeRealNumberMakeAnTriangle($a, $b, $c)
		);
	}

	public function testThreeRealNumberAreAllPositiveButDoNotMakeATriangle()
	{
		$a = 1;
		$b = 3;
		$c = 10;
		$result = 'Unsatisfied';
		$this->assertEquals(
				$result,
				Triangle::checkIfThreeRealNumberMakeAnTriangle($a, $b, $c)
		);
	}

	public function testThreeRealNumberAreAllPositiveAndMakeATriangle()
	{
		$a = 1;
		$b = 3;
		$c = 3;
		$result = 'Satisfied';
		$this->assertEquals(
				$result,
				Triangle::checkIfThreeRealNumberMakeAnTriangle($a, $b, $c)
		);
	}
}