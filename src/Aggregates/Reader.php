<?php

namespace HeadOfDDD\Library\Domain\Aggregates;

use DateTimeInterface;
use HeadOfDDD\Library\Domain\ValueObjects\Address;

class Reader
{
    /** @var string */
    private $id;
    /** @var string */
    private $name;
    /** @var Address */
    private $address;
    /** @var DateTimeInterface */
    private $birthDate;

    /**
     * Reader constructor.
     *
     * @param string            $id
     * @param string            $name
     * @param Address           $address
     * @param DateTimeInterface $birthDate
     */
    public function __construct(string $id, string $name, Address $address, DateTimeInterface $birthDate)
    {
        $this->id = $id;
        $this->name = $name;
        $this->address = $address;
        $this->birthDate = $birthDate;
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
     * @return DateTimeInterface
     */
    public function getBirthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }
}