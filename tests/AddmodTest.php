<?php
/**
 * Tests for AddMod
 */

use PHPUnit\Framework\TestCase;
use Addmod\Addmod;

class AddmodTest extends TestCase {
    private Addmod $instance;

    protected function setUp(): void {
        $this->instance = new Addmod(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Addmod::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
