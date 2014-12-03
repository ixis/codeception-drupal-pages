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
class AdminMenuPage
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/menu';

    /**
     * Page title.
     *
     * @var string
     */
    public static $pageTitle = 'Menus';

    /**
     * Selector for the 'save' button on an edit menu page.
     *
     * @var string
     */
    public static $saveButtonSelector = '#edit-actions-submit';

    /**
     * Selector for the title field when editing a menu.
     *
     * @var string
     */
    public static $titleFieldSelector = "#edit-title--2";

    /**
     * Selector for the Description field when editing a menu.
     *
     * @var string
     */
    public static $descriptionFieldSelector = "#edit-description--2";

    /**
     * Selector for the 'edit description' checkbox toggle.
     *
     * @var string
     */
    public static $editDescriptionToggle = "#edit-description-toggle";

    /**
     * Selector for the 'delete' button on an edit menu page.
     *
     * @var string
     */
    public static $deleteButtonSelector = '#edit-actions-delete';

    /**
     * Selector for the 'delete' confirmation button.
     *
     * @var string
     */
    public static $deleteConfirmationButtonSelector = '#edit-submit';

    /**
     * Routing.
     *
     * @param string $menuName
     *   The system name of the menu, such as 'menu-business'.
     * @param string $op
     *   The operation to perform on the menu. Possible values are 'add' or
     *   'edit'.
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($menuName = '', $op = '')
    {
        switch ($op) {
            case '':
                return static::URL;
            case 'add':
                return static::URL . '/manage/' . $menuName . '/add';
            case 'edit':
                return static::URL . '/manage/' . $menuName . '/edit';
        }

        throw new \Exception('Invalid route parameter passed to ' . __CLASS__ . ' PageObject.');
    }
}
