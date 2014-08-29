<?php
/**
 * @file
 * Admin page for content types.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminContentTypesPage.
 */
class AdminContentTypesPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/structure/types';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Content types';

    /**
     * Implements route().
     *
     * Allows route to be selected for /admin/structure/types.
     *
     * @return string
     */
    public static function route()
    {
        return static::$URL;
    }
}
