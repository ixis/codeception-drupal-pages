<?php
/**
 * @file
 * PageObject for /admin/config/search/metatags (Metatag module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMetatagPage.
 */
class AdminGoogleAnalyticsPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/system/googleanalytics';

    /**
     * Page title.
     *
     * @var string
     */
    public static $pageTitle = 'Google Analytics';

    /**
     * CSS selector for the 'Web property ID' field.
     *
     * @var string
     */
    public static $uaAccountNumberFieldSelector = '#edit-googleanalytics-account';

    /**
     * Routing.
     *
     * @return string
     *   The correct relative path to the page.
     */
    public static function route()
    {
        return static::URL;
    }
}
