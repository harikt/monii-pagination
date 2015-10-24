<?php

namespace Monii\Pagination;

class PaginatedCollection
{
    /**
     * @var object[]
     */
    private $items = [];

    /**
     * @var int
     */
    private $totalNumberOfItems;

    /**
     * @var int
     */
    private $numberOfPages;

    /**
     * @var int
     */
    private $currentPage;

    /**
     * @var int
     */
    private $nextPage;

    /**
     * @var int
     */
    private $previousPage;

    /**
     * @var int
     */
    private $itemsPerPage;

    /**
     * PaginatedCollection constructor.
     * @param object[] $items
     * @param int $totalNumberOfItems
     * @param int $numberOfPages
     * @param int $currentPage
     * @param int $itemsPerPage
     */
    public function __construct(
        array $items,
        $totalNumberOfItems,
        $numberOfPages,
        $currentPage,
        $itemsPerPage = null
    ) {
        $this->items = $items;
        $this->totalNumberOfItems = $totalNumberOfItems;
        $this->numberOfPages = $numberOfPages;
        $this->currentPage = $currentPage;
        $this->nextPage = $currentPage < $numberOfPages ? $currentPage + 1 : null;
        $this->previousPage = $currentPage > 1 ? $currentPage - 1 : null;
        $this->itemsPerPage = $itemsPerPage;
    }


    /**
     * @return object[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return int
     */
    public function getNumberOfItems()
    {
        return count($this->items);
    }

    /**
     * @return int
     */
    public function getTotalNumberOfItems()
    {
        return $this->totalNumberOfItems;
    }

    /**
     * @return int
     */

    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @return int
     */
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * @return int
     */
    public function getLastPage()
    {
        return $this->numberOfPages;
    }

    /**
     * @return int
     */
    public function getNextPage()
    {
        return $this->nextPage;
    }

    /**
     * @return int
     */
    public function getPreviousPage()
    {
        return $this->previousPage;
    }

    /**
     * @return bool
     */
    public function previousPageIsFirstPage()
    {
        return $this->previousPage === 1;
    }

    /**
     * @return bool
     */
    public function nextPageIsLastPage()
    {
        return $this->nextPage === $this->numberOfPages;
    }

    /**
     * @return bool
     */
    public function currentPageIsFirstPage()
    {
        return $this->currentPage === 1;
    }

    /**
     * @return bool
     */
    public function currentPageIsLastPage()
    {
        return $this->currentPage === $this->numberOfPages;
    }

    /**
     * @return int
     */
    public function getItemsPerPage()
    {
        return $this->itemsPerPage;
    }
}
