<?php

namespace HeadOfDDD\Library\Domain\ValueObjects;


class Address
{
    /** @var Country */
    private $country;
    /** @var Street */
    private $street;
    /** @var House */
    private $house;
    /** @var ZipCode */
    private $zipCode;

    /**
     * Address constructor.
     *
     * @param Country $country
     * @param Street  $street
     * @param House   $house
     * @param ZipCode $zipCode
     */
    public function __construct(Country $country, Street $street, House $house, ZipCode $zipCode)
    {
        $this->country = $country;
        $this->street = $street;
        $this->house = $house;
        $this->zipCode = $zipCode;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @return Street
     */
    public function getStreet(): Street
    {
        return $this->street;
    }

    /**
     * @return House
     */
    public function getHouse(): House
    {
        return $this->house;
    }

    /**
     * @return ZipCode
     */
    public function getZipCode(): ZipCode
    {
        return $this->zipCode;
    }
}