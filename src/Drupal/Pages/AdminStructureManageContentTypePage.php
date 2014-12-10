<?php
/**
 * @file
 * Admin page for administering a content type.
 */

namespace Codeception\Module\Drupal\Pages;

use Codeception\Exception\TestRuntime as RuntimeException;

/**
 * Class AdminStructureManageContentTypePage
 */
class AdminStructureManageContentTypePage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/structure/types/manage/%selection%';

   /**
    * @var string
    *   Selector for 'Menu settings' anchor.
    */
    public static $menuSettingsLink = "//strong[.='Menu settings']/..";

    /**
     * Get the selector for the menu options checkbox.
     *
     * Get the selector for the menu options checkbox indicating whether content type
     * can be assigned to the menu.
     *
     * @param string $menu_name
     *   The machine name of the menu e.g. "menu-main"
     *
     * @return string
     *   The selector for the checkbox indicating whether content type
     *   can be assigned to the menu.
     */
    public static function menuOptionCheckboxSelector($menu_name)
    {
      return "//*[@id='edit-menu-options']//input[@type='checkbox' and @value = '$menu_name']";
    }

    /**
     * Implements route().
     *
     * @param string $content_type
     *   The machine name of the content type.
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($content_type)
    {
        return strtr(
          self::$URL,
          array(
            "%selection%" => $content_type
          )
        );
    }
}
