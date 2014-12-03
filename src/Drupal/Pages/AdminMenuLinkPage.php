<?php
/**
 * @file
 * PageObject for /admin/structure/menu/<menu>/add - adding a menu link.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMenuLinkPage
 *
 * @package Codeception\Module\Drupal\Pages
 */
class AdminMenuLinkPage
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/menu/manage';

    /**
     * Selector for the 'save' button on an edit menu page.
     *
     * @var string
     */
    public static $saveButtonSelector = '#edit-submit';

    /**
     * Selector for the title field when editing a menu link.
     *
     * @var string
     */
    public static $titleFieldSelector = "#edit-link-title";

    /**
     * Selector for the path field when editing a menu link.
     *
     * @var string
     */
    public static $pathFieldSelector = "#edit-link-path";

    /**
     * Routing.
     *
     * @param string $menuName
     *   The system name of the menu, such as 'menu-business'.
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($menuName)
    {
        if (empty($menuName)) {
            throw new \Exception('Invalid menu name passed to ' . __CLASS__ . ' PageObject.');
        }

        return self::URL . "/" . $menuName . "/add";
    }
}
