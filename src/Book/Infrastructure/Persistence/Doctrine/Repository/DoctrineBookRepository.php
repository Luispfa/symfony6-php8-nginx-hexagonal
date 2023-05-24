<?php

declare(strict_types = 1);

namespace App\Book\Infrastructure\Persistence\Doctrine\Repository;

use App\Book\Domain\Book;
use App\Book\Domain\BookRepository;
use App\Shared\Infrastructure\Persistence\Doctrine\DoctrineRepository;

class DoctrineBookRepository extends DoctrineRepository implements BookRepository
{
    public function save(Book $entity): void
    {
        $this->persist($entity);
    }

    public function list(Book $entity): array
    {
        return $this->findAll($entity::class);
    }
}