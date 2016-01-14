<?php

namespace Monii\Pagination\Tests\Unit;

use Monii\Pagination\PaginatedCollection;
use PHPUnit_Framework_TestCase;

class PaginatedCollectionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @param PaginatedCollection $paginatedCollection
     * @dataProvider provideCurrentPageIsFirstIsTrueData
     */
    public function testCurrentPageIsFirstIsTrue(PaginatedCollection $paginatedCollection)
    {
        $this->assertTrue($paginatedCollection->currentPageIsFirstPage());
    }

    public function provideCurrentPageIsFirstIsTrueData()
    {
        return [
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    3,  // total number of items
                    1,  // current page
                    10  // items per page
                ),
            ],
            [
                new PaginatedCollection(
                    ['a', 'b', 'c'],
                    14, // total number of items
                    1,  // current page
                    3   // items per page
                ),
            ],
        ];
    }
}
