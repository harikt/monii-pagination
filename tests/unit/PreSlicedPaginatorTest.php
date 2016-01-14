<?php

namespace Monii\Pagination\Tests\Unit;

use Monii\Pagination\PaginatedCollection;
use Monii\Pagination\PreSlicedPaginator;
use PHPUnit_Framework_TestCase;

class PreSlicedPaginatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param PaginatedCollection $expectedPaginatedCollection
     * @dataProvider providePaginateItemsData
     */
    public function testPaginateItems(
        PaginatedCollection $expectedPaginatedCollection,
        PaginatedCollection $actualPaginatedCollection
    ) {
        $this->assertEquals(
            $expectedPaginatedCollection,
            $actualPaginatedCollection
        );
    }

    public function providePaginateItemsData()
    {
        return [
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    3,  // total number of items
                    1,  // current page
                    10  // items per page
                ),
                PreSlicedPaginator::paginateItems(['a', 'b', 'c'], 3, 10),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    3,  // total number of items
                    1,  // current page
                    10  // items per page
                ),
                PreSlicedPaginator::paginateItems(['a', 'b', 'c'], 3, 10, 1),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    14, // total number of items
                    1,  // current page
                    3   // items per page
                ),
                PreSlicedPaginator::paginateItems(['a', 'b', 'c'], 14, 3),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    14, // total number of items
                    1,  // current page
                    3   // items per page
                ),
                PreSlicedPaginator::paginateItems(['a', 'b', 'c'], 14, 3, 1),
            ],
            [
                new PaginatedCollection(
                    ['d', 'e', 'f'],
                    14, // total number of items
                    2,  // current page
                    3  // items per page
                ),
                PreSlicedPaginator::paginateItems(['d', 'e', 'f'], 14, 3, 2),
            ],
        ];
    }
}
