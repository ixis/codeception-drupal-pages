<?php
/**
 * @file
 * PageObject for /admin/structure/menu and associated pages (menu module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMenuPage
 *
 * @package Codeception\Module\Drupal\Pages
 */
class AdminNewMenuPage
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/menu/add';

    /**
     * Selector for the 'save' button on a new menu page.
     *
     * @var string
     */
    public static $saveButtonSelector = '#edit-submit';

    /**
     * Selector for the title field when adding a new menu.
     *
     * @var string
     */
    public static $titleFieldSelector = "#edit-title";

    /**
     * Selector for the Description field when adding a new menu.
     *
     * @var string
     */
    public static $descriptionFieldSelector = "#edit-description";

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
        return self::URL;
    }
}
