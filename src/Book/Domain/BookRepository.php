<?php

declare(strict_types=1);

namespace App\Book\Domain;

interface BookRepository
{
    public function save(Book $entity): void;

    public function list(Book $entity): array;
}
