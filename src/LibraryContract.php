<?php


namespace HeadOfDDD\Library\Domain;


use HeadOfDDD\Library\Domain\Repositories\LibraryCardRepositoryInterface;
use HeadOfDDD\Library\Domain\Repositories\LibraryRepositoryInterface;
use HeadOfDDD\Library\Domain\Repositories\ReaderRepositoryInterface;

class LibraryContract
{
    /** @var LibraryRepositoryInterface */
    private $libraryRepository;
    /** @var LibraryCardRepositoryInterface */
    private $libraryCardRepository;
    /** @var ReaderRepositoryInterface */
    private $readerRepository;

    /**
     * Contract constructor.
     *
     * @param LibraryRepositoryInterface     $libraryRepository
     * @param LibraryCardRepositoryInterface $libraryCardRepository
     * @param ReaderRepositoryInterface      $readerRepository
     */
    public function __construct(LibraryRepositoryInterface $libraryRepository, LibraryCardRepositoryInterface $libraryCardRepository, ReaderRepositoryInterface $readerRepository)
    {
        $this->libraryRepository = $libraryRepository;
        $this->libraryCardRepository = $libraryCardRepository;
        $this->readerRepository = $readerRepository;
    }
}