<?php

namespace HeadOfDDD\Library\Domain\Aggregates;


use HeadOfDDD\Library\Domain\Entities\CardItem;

class LibraryCard
{
    /** @var string */
    private $id;
    /** @var CardItem[] */
    private $cardItems = [];
    /** @var string */
    private $readerId;
}