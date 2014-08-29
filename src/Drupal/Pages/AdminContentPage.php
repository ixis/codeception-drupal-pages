<?php
/**
 * @file
 * Admin page for content.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminContentPage.
 */
class AdminContentPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/content';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Content';

    /**
     * Implements route().
     *
     * Allows route to be selected for /admin/content.
     *
     * @return string
     */
    public static function route()
    {
        return self::$URL;
    }
}
