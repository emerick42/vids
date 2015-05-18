<?php

namespace App\Bundle\MainBundle\Infrastructure\Top;

use App\Domain\Top\ReaderInterface;
use App\Domain\Top\Video;

/**
 * Read the top videos list from a static in memory list
 */
class InMemoryReader implements ReaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function page($page)
    {
        return [
            new Video('https://www.youtube.com/watch?v=sJ_FLSTAa3M'),
            new Video('https://www.youtube.com/watch?v=H3lSysLfysw'),
            new Video('https://www.youtube.com/watch?v=a87--V1uTEc'),
            new Video('https://www.youtube.com/watch?v=4HCDdXwBPY0'),
        ];
    }
}
