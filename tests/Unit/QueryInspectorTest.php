<?php

declare(strict_types=1);

namespace SmitBackend\EloquentLens\Tests\Unit;

use PHPUnit\Framework\TestCase;
use SmitBackend\EloquentLens\QueryInspector;

class QueryInspectorTest extends TestCase
{
    public function test_it_detects_n_plus_one_queries(): void
    {
        $inspector = new QueryInspector(threshold: 3);
        $query = "SELECT * FROM users WHERE id = ?";

        $inspector->inspect($query, [1], 1.2);
        $inspector->inspect($query, [2], 1.1);
        $detected = $inspector->inspect($query, [3], 1.4);

        $this->assertTrue($detected);
        $this->assertCount(1, $inspector->getDuplicates());
    }
}
