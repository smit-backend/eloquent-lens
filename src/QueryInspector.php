<?php

declare(strict_types=1);

namespace SmitBackend\EloquentLens;

use SmitBackend\EloquentLens\Contracts\QueryDetectorInterface;

/**
 * Class QueryInspector
 *
 * @package SmitBackend\EloquentLens
 */
class QueryInspector implements QueryDetectorInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Business logic execution
        return array_merge($this->config, $payload);
    }
}
