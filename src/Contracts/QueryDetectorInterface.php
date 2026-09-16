<?php

declare(strict_types=1);

namespace SmitBackend\EloquentLens\Contracts;

/**
 * Interface QueryDetectorInterface
 *
 * @package SmitBackend\EloquentLens
 */
interface QueryDetectorInterface
{
    public function execute(array $payload = []): mixed;
}
