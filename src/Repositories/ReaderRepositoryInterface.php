<?php


namespace HeadOfDDD\Library\Domain\Repositories;


use HeadOfDDD\Library\Domain\Aggregates\Reader;

interface ReaderRepositoryInterface
{
    public function getById(string $readerId): Reader;
    public function save(Reader $reader): Reader;
}