<?php
/**
 * @file
 * PageObject for /admin/config/search/metatags (Metatag module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMetatagPage.
 */
class AdminMetatagPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/search/metatags';

    /**
     * Page title.
     *
     * @var string
     */
    public static $pageTitle = 'Metatag';

    /**
     * Add redirect link text.
     *
     * @var string
     */
    public static $addRedirectLinkText = 'Add redirect';

    /**
     * Selector for the filter form element.
     *
     * @var string
     */
    public static $filterElementSelector = '#edit-filter';

    /**
     * Selector for the source form element.
     *
     * @var string
     */
    public static $sourceElementSelector = '#edit-source';

    /**
     * Selector for the redirect form element.
     *
     * @var string
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
