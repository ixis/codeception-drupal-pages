<?php
/**
 * @file
 * Elements of the Poll Archive page at /poll
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class PollArchivePage.
 */
class PollArchivePage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'poll';

    /**
     * Selector for element containing news.
     *
     * @var string
     */
    public static $pageTitle = "Poll Archive";

    /**
     * Basic route example.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route()
    {
        return static::$URL;
    }
}
