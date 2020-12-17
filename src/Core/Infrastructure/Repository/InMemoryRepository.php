<?php

declare(strict_types=1);

namespace BlankProject\Core\Infrastructure\Repository;

use BlankProject\Core\Domain\Model\BasicRepository;

final class InMemoryRepository implements BasicRepository
{
    public function __construct()
    {
    }
}
