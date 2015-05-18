<?php

namespace App\Domain\Top;

/**
 * Read the top videos list from a storage engine
 */
interface ReaderInterface
{
    /**
     * List videos on the given page number of the top list
     *
     * @param int $page
     *
     * @return Videos[]
     */
    public function page($number);
}
