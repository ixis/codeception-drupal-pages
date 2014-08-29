<?php
/**
 * @file
 * Defines elements of the "add file" page.
 *
 * This is potentially multiple consecutive pages since the user needs to click 'next' and fill out some extra
 * information in some situations.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class FileAddPage.
 */
class FileAddPage extends Page
{
    /**
     * The title of the page (in the h1 tag, not the <title> tag).
     *
     * @var string
     */
    public static $pageTitle = 'Add file';

    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'file/add';

    /**
     * Selector for the 'file' field into which a file can be chosen.
     *
     * @var string
     */
    public static $fileFieldSelector = '#edit-upload-upload';

    /**
     * Selector for the 'upload' button to start the image upload.
     *
     * @var string
     */
    public static $uploadButtonSelector = '#edit-upload-upload-button';

    /**
     * Selector for the 'next' button to progress to the next page.
     *
     * @var string
     */
    public static $nextButtonSelector = '#edit-next';

    /**
     * Selector for the alt text attribute field.
     *
     * This is on the second page and usually only applies when images are being uploaded.
     *
     * @var string
     */
    public static $altTextFieldSelector = '#edit-field-file-image-alt-text-und-0-value';

    /**
     * Selector for the title text attribute field.
     *
     * This is on the second page and usually only applies when images are being uploaded.
     *
     * @var string
     */
    public static $titleTextFieldSelector = '#edit-field-file-image-title-text-und-0-value';

    /**
     * Selector for the 'save' button to finish and save the file upload.
     *
     * @var string
     */
    public static $saveButtonSelector = '#edit-submit';

    /**
     * {@inheritdoc}
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route()
    {
        return static::$URL;
    }
}
