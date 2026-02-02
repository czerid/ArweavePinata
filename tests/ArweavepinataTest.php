<?php
/**
 * Tests for ArweavePinata
 */

use PHPUnit\Framework\TestCase;
use Arweavepinata\Arweavepinata;

class ArweavepinataTest extends TestCase {
    private Arweavepinata $instance;

    protected function setUp(): void {
        $this->instance = new Arweavepinata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Arweavepinata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
