<?php


namespace HeadOfDDD\Library\Domain\Repositories;


use HeadOfDDD\Library\Domain\Aggregates\LibraryCard;

interface LibraryCardRepositoryInterface
{
    public function getById(string $libraryCardId): LibraryCard;
    public function save(LibraryCard $libraryCard): LibraryCard;
}