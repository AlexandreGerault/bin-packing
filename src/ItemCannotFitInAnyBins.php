<?php

declare(strict_types=1);

namespace Hexium\BinPacking;

class ItemCannotFitInAnyBins extends \Exception
{
    /**
     * @param Item $item
     * @param array<Bin> $bins
     */
    public function __construct(private readonly Item $item, private readonly array $bins)
    {
        $message = sprintf(
            'Cannot pack item %s of width %s and height %s because no bins is large enough',
            $item->id(),
            $item->width(),
            $item->height()
        );

        parent::__construct($message);
    }

    public function item(): Item
    {
        return $this->item;
    }

    public function bins(): array
    {
        return $this->bins;
    }
}
