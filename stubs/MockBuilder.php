<?php
namespace PHPUnit\Framework\MockObject;

use PHPUnit\Framework\TestCase;

/**
 * @template T
 */
class MockBuilder
{
    /**
     * @template-typeof T $type
     * @param TestCase     $testCase
     * @param class-string $type
     */
    public function __construct(TestCase $testCase, $type) {}

    /**
     * Creates a mock object using a fluent interface.
     *
     * @return MockObject&T
     */
    public function getMock() {}

    /**
     * Specifies the subset of methods to mock. Default is to mock none of them.
     *
     * @param array|null $methods
     *
     * @return static
     */
    public function setMethods(array $methods = null) {}
}
