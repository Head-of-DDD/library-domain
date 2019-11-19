<?php

namespace HeadOfDDD\Library\Domain\ValueObjects;


class House
{
    /** @var string */
    private $number;

    /**
     * House constructor.
     *
     * @param string $number
     */
    public function __construct(string $number)
    {
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}