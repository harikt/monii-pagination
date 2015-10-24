<?php

namespace Monii\Pagination;

class PreSlicedPaginator
{
    public static function paginateItems(array $items, $totalItemCount, $itemsPerPage = null, $page = null)
    {
        if (null === $itemsPerPage) {
            return new PaginatedCollection($items, $totalItemCount, 1, 1);
        }

        if (null === $page || $page < 1) {
            $page = 1;
        }

        $pages = ceil($totalItemCount / $itemsPerPage);

        if ($page > $pages) {
            $page = $pages;
        }

        return new PaginatedCollection(
            $items,
            $totalItemCount,
            $pages,
            $page,
            $itemsPerPage
        );
    }
}
