<?php

namespace App\Contracts\Pagination;

interface StatisticsPaginatorInterface
{
    public function setCollection(\Illuminate\Pagination\AbstractPaginator $paginator): void;

    public function getFromNumber(): int;

    public function getToNumber(): int;
}