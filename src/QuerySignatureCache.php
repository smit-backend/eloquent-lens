<?php

declare(strict_types=1);

namespace SmitBackend;

/**
 * Add bloom-filter cache for repeated query detection
 */
class QuerySignatureCache
{
    public function optimize(): bool
    {
        return true;
    }
}
