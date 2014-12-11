<?php
/**
 * @file
 * Defines elements of the admin content -> files page.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminFilesPage.
 */
class AdminFilesPage extends Page
{
    /**
     * The title of the page (in the h1 tag, not the <title> tag).
     *
     * @var string
     */
    public static $pageTitle = 'Content';

    /**
     * URL/path to this page.
     *
     * @var string
     */
    protected static $URL = 'admin/content/file';

    /**
     * Selector for the 'filename' field.
     *
     * @var string
     */
    public static $userNameCellSelector = 'td.views-field-name';

    /**
     * Selector for a specific role for a specific user.
     *
     * @var string
     */
    public static $filenameSelector = '//td[contains(@class, "views-field-name")]/a[text() = "%s"]';

    /**
     * Selector for the 'type' filter drop-down.
     *
     * @var string
     */
    public static $typeFilterSelector = '#edit-type';

    /**
     * Selector for the 'apply' button on the file filter.
     *
     * @var string
     */
    public static $filterSubmitSelector = '#edit-submit-admin-views-file';

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
