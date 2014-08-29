<?php
/**
 * @file
 * The page at admin/structure/pages that lists the panels pages on the site.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminPagesPage.
 */
class AdminPagesPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/structure/pages';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Pages';

    /**
     * The XPath to use in order to determine whether a page is disabled.
     *
     * Use with sprintf() to pass a parameter that represents the system name of the page you are checking.
     *
     * @var string
     */
    public static $pageDisabledSelector =
        "//tr[contains(@class,'%s')]//td[@class='page-manager-page-operations']//a[contains(text(), 'Enable')]";

    /**
     * Implements route().
     *
     * @return string
     */
    public static function route()
    {
        return self::$URL;
    }
}
