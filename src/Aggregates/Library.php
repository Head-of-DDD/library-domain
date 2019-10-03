<?php

namespace HeadOfDDD\Library\Domain\Aggregates;

use HeadOfDDD\Library\Domain\ValueObjects\Address;

class Library
{
    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var Address */
    private $address;
    /** @var LibraryCard[] */
    private $cards = [];

    /**
     * Library constructor.
     *
     * @param string        $id
     * @param string        $name
     * @param Address       $address
     * @param LibraryCard[] $cards
     */
    public function __construct(string $id, string $name, Address $address, array $cards)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->cards = $cards;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @return LibraryCard[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}