<?php
/**
 * @file
 * PageObject for /admin/config/search/path/patterns (Pathauto patterns page).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminPathautoPage.
 */
class AdminPathautoPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/search/path/patterns';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'URL aliases';

    /**
     * Routing.
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route()
    {
        return static::URL;
    }
}
