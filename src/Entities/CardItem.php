<?php

namespace HeadOfDDD\Library\Domain\Entities;

use DateTimeInterface;

class CardItem
{
    /** @var string */
    private $id;
    /** @var string */
    private $bookId;
    /** @var DateTimeInterface */
    private $issueDate;
    /** @var DateTimeInterface */
    private $returnDate;

    /**
     * CardItem constructor.
     *
     * @param string            $id
     * @param string            $bookId
     * @param DateTimeInterface $issueDate
     * @param DateTimeInterface $returnDate
     */
    public function __construct(string $id, string $bookId, DateTimeInterface $issueDate, DateTimeInterface $returnDate)
    {
        $this->id = $id;
        $this->bookId = $bookId;
        $this->issueDate = $issueDate;
        $this->returnDate = $returnDate;
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
    public function getBookId(): string
    {
        return $this->bookId;
    }

    /**
     * @return DateTimeInterface
     */
    public function getIssueDate(): DateTimeInterface
    {
        return $this->issueDate;
    }

    /**
     * @return DateTimeInterface
     */
    public function getReturnDate(): DateTimeInterface
    {
        return $this->returnDate;
    }
}