<?php
/**
 * Tests for DataBridge
 */

use PHPUnit\Framework\TestCase;
use Databridge\Databridge;

class DatabridgeTest extends TestCase {
    private Databridge $instance;

    protected function setUp(): void {
        $this->instance = new Databridge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Databridge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
