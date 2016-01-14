<?php

namespace Monii\Pagination;

class InMemoryPaginator
{
    public static function paginateItems(array $items = [], $itemsPerPage = null, $page = null)
    {
        $itemCount = count($items);

        if (null === $itemsPerPage) {
            return new PaginatedCollection($items, $itemCount, 1);
        }

        if (null === $page || $page < 1) {
            $page = 1;
        }

        return new PaginatedCollection(
            array_slice($items, ($page - 1) * $itemsPerPage, $itemsPerPage),
            $itemCount,
            $page,
            $itemsPerPage
        );
    }
}
