<?php

declare(strict_types=1);

namespace SmitBackend\EloquentLens;

use SmitBackend\EloquentLens\Contracts\QueryDetectorInterface;

class QueryInspector implements QueryDetectorInterface
{
    private array $loggedQueries = [];
    private int $threshold;

    public function __construct(int $threshold = 5)
    {
        $this->threshold = $threshold;
    }

    public function inspect(string $query, array $bindings, float $timeMs): bool
    {
        $hash = md5($query);
        $this->loggedQueries[$hash] = ($this->loggedQueries[$hash] ?? 0) + 1;

        return $this->loggedQueries[$hash] >= $this->threshold;
    }

    public function getDuplicates(): array
    {
        return array_filter($this->loggedQueries, fn($count) => $count >= $this->threshold);
    }
}
