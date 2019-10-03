<?php

namespace HeadOfDDD\Library\Domain\ValueObjects;


class Country
{
    /** @var string */
    private $name;
    /** @var string */
    private $code;

    /**
     * Country constructor.
     *
     * @param string $name
     * @param string $code
     */
    public function __construct(string $name, string $code)
    {
        $this->name = $name;
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}