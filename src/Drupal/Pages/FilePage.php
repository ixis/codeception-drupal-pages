<?php
/**
 * @file
 * Defines elements of a file page as set out by the file_entity module.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class FileAddPage.
 */
class FilePage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'file/%fid%';

    /**
     * The selector used to find the delete button on the file deletion confirmation page.
     *
     * @var string
     */
    public static $deleteButtonSelector = '#edit-submit';

    /**
     * The text that should appear on the page when a file has been deleted successfully.
     *
     * @var string
     */
    public static $deletionSuccessfulText = 'has been deleted';

    /**
     * The selector within which the $deletionSuccessfulText should appear.
     *
     * @var string
     */
    public static $deletionSuccessfulSelector = 'div.alert-success';

    /**
     * {@inheritdoc}
     *
     * @param int $fid
     *   The file's numeric ID.
     * @param string $op
     *   The operation, such as 'delete'.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route($fid, $op = '')
    {
        $url = str_replace('%fid%', $fid, static::$URL);

        switch ($op) {
            case 'delete':
                return $url . '/delete';

            case '':
            default:
                return $url;
        }
    }
}
