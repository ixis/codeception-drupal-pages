<?php
/**
 * @file
 * PageObject for /admin/structure/context (Context module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminContextPage.
 */
class AdminContextPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/context';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Context';

    /**
     * @var string
     *   Add redirect link text.
     */
    public static $addRedirectLinkText = 'Add';

    /**
     * @var string
     *   Selector for a Context appearing in the administrative list.
     */
    public static $contextsListNameSelector = '.ctools-export-ui-name';

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
            case 'import':
            case 'settings':
                return static::URL . '/' . $param;
        }
        throw new \Exception('Invalid route parameter passed to AdminRedirect PageObject.');
    }
}
