<?php

namespace App\Book\Domain;

readonly class Book
{

    public function __construct(
        public int $id,
        public string $title,
        public ?string $image = null
    ) {
    }
}
