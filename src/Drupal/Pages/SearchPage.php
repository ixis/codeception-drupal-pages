<?php
/**
 * @file
 * Defines elements of the search page and search results.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class UserAccountPage.
 */
class SearchPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'search/node';

    /**
     * Basic route example.
     *
     * @param string $param
     *   The task to generate a path for.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route($param = '')
    {
        return empty($param) ? static::$URL : static::$URL . '/' . $param;
    }
}
