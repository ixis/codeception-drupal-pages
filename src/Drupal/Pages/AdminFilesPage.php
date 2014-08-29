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
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/content/file';

    /**
     * Selector for the 'filename' field.
     */
    public static $userNameCellSelector = 'td.views-field-name';

    /**
     * Selector for a specific role for a specific user.
     */
    public static $filenameSelector = '//td[contains(@class, "views-field-name")]/a[text() = "%s"]';

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
