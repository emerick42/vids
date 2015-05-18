<?php

namespace App\Domain\Top;

/**
 * A video in the top list
 */
class Video
{
    /**
     * The url of the video
     *
     * @var string
     */
    private $url;

    /**
     * __construct
     *
     * @param string $url
     */
    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
