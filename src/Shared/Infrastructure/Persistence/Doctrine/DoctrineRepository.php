<?php

declare(strict_types=1);

namespace App\Shared\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

abstract class DoctrineRepository
{
    public function __construct(protected EntityManagerInterface $entityManager)
    {
    }

    protected function findAll(string $entity): array
    {
        return $this->repository($entity)->findAll();
    }

    protected function persist($entity): void
    {
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    protected function remove($entity): void
    {
        $this->entityManager->remove($entity);
        $this->entityManager->flush();
    }

    protected function repository(string $entityClass): EntityRepository
    {
        return $this->entityManager->getRepository($entityClass);
    }
}
