<?php


namespace HeadOfDDD\Library\Domain\ValueObjects;


class ZipCode
{
    /** @var string */
    private $code;

    /**
     * ZipCode constructor.
     *
     * @param string $code
     */
    public function __construct(string $code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }
}