<?php

namespace Monii\Pagination\Tests\Unit;

use Monii\Pagination\InMemoryPaginator;
use Monii\Pagination\PaginatedCollection;
use PHPUnit_Framework_TestCase;

class InMemoryPaginatorTest extends PHPUnit_Framework_TestCase
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
        $items = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n'];

        return [
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    3,  // total number of items
                    1,  // current page
                    10  // items per page
                ),
                InMemoryPaginator::paginateItems(['a', 'b', 'c'], 10),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    3,  // total number of items
                    1,  // current page
                    10  // items per page
                ),
                InMemoryPaginator::paginateItems(['a', 'b', 'c'], 10, 1),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    14, // total number of items
                    1,  // current page
                    3   // items per page
                ),
                InMemoryPaginator::paginateItems($items, 3),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    14, // total number of items
                    1,  // current page
                    3   // items per page
                ),
                InMemoryPaginator::paginateItems($items, 3, 1),
            ],
            [
                new PaginatedCollection(
                    ['d', 'e', 'f'],
                    14, // total number of items
                    2,  // current page
                    3  // items per page
                ),
                InMemoryPaginator::paginateItems($items, 3, 2),
            ],
        ];
    }
}
