<?php
/**
 * @file
 * PageObject for /admin/config/search/redirect (Redirect module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminRedirectPage.
 */
class AdminRedirectPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/search/redirect';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'URL Redirects';

    /**
     * @var string
     *   Add redirect link text.
     */
    public static $addRedirectLinkText = 'Add redirect';

    /**
     * @var string
     *   Selector for the filter form element.
     */
    public static $filterElementSelector = '#edit-filter';

    /**
     * @var string
     *   Selector for the source form element.
     */
    public static $sourceElementSelector = '#edit-source';

    /**
     * @var string
     *   Selector for the redirect form element.
     */
    public static $redirectElementSelector = '#edit-redirect';

    /**
     * Routing.
     *
     * @param string $param
     *   The 3rd path argument (/admin/config/search/redirect/$param)
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($param = '')
    {
        switch ($param) {
            case '':
                return static::URL;
            case 'add':
                return static::URL . '/' . $param;
        }
        throw new \Exception('Invalid route parameter passed to AdminRedirect PageObject.');
    }
}
