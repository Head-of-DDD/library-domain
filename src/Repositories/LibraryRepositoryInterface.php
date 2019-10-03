<?php


namespace HeadOfDDD\Library\Domain\Repositories;

use HeadOfDDD\Library\Domain\Aggregates\Library;

interface LibraryRepositoryInterface
{
    public function getById(string $libraryId): Library;
    public function save(Library $library): Library;
}