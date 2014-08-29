<?php
/**
 * @file
 * Defines elements of the user permissions administration page (/admin/people/permissions).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminPeoplePermissionsPage.
 */
class AdminPeoplePermissionsPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/people/permissions';

    /**
     * @var string
     *   Page title text.
     */
    public static $pageTitle = 'People';

    /**
     * @var string
     *   Selector for administrative table listing user roles.
     */
    public static $userRolesTableSelector = 'table#user-roles';

    /**
     * Selector for the 'name' field.
     */
    public static $roleNameCellSelector = 'table#permissions th';

    /**
     * Basic route example.
     *
     * @param string $param
     *   The task to generate a path for.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route($param = '')
    {
        return static::$URL . '/' . $param;
    }
}
