<?php
/**
 * @file
 * PageObject for /admin/config/workbench/*feature* (Workbench module group).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMetatagPage.
 */
class AdminWorkbenchPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/workbench';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Workbench';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitleAccess = 'Workbench Access';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitleModeration = 'Wrokbench Moderation';

    /**
     * Routing.
     *
     * @param string $param
     *   The 3rd path argument (/admin/config/workbench/$param)
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
            case 'access':
                return static::URL . '/' . $param;
            case 'moderation':
                return static::URL . '/' . $param;
        }
        throw new \Exception('Invalid route parameter passed to AdminWorkbench PageObject.');
    }
}
