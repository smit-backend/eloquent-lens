<?php

declare(strict_types=1);

namespace SmitBackend\EloquentLens\Contracts;

interface QueryDetectorInterface
{
    public function inspect(string $query, array $bindings, float $timeMs): bool;
}
