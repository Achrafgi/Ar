<?php

namespace App\Services\Pagination;

use App\Contracts\Pagination\StatisticsPaginatorInterface;

class StatisticsPaginatorService implements StatisticsPaginatorInterface
{
    /** @var \Illuminate\Pagination\AbstractPaginator */
    private $_patinator;

    function setCollection(\Illuminate\Pagination\AbstractPaginator $paginator): void
    {
        $this->_patinator = $paginator;
    }

    function getFromNumber(): int
    {
        return ($this->_patinator->currentPage() - 1) * $this->_patinator->perPage();
    }

    function getToNumber(): int
    {
        return $this->getFromNumber() + $this->_patinator->count();
    }
}
