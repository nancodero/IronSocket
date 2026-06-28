<?php
/**
 * Tests for IronSocket
 */

use PHPUnit\Framework\TestCase;
use Ironsocket\Ironsocket;

class IronsocketTest extends TestCase {
    private Ironsocket $instance;

    protected function setUp(): void {
        $this->instance = new Ironsocket(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Ironsocket::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
