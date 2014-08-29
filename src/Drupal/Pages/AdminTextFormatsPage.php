<?php
/**
 * @file
 * PageObject for /admin/config/content/formats
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminTextFormatsPage.
 */
class AdminTextFormatsPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/content/formats';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Text formats';

    /**
     * @var string
     *   Add redirect link text.
     */
    public static $addTextFormatLinkText = 'Add text format';

    /**
     * @var string
     *   Selector for the Name form element.
     */
    public static $nameElementSelector = '#edit-name';

    /**
     * @var string
     *   Selector for the Roles form element.
     */
    public static $rolesElementSelector = '#edit-name';

    /**
     * @var string
     *   Selector for the Enabled filters form element.
     */
    public static $filtersElementSelector = '#edit-name';

    /**
     * @var string
     *   XPath selector for the first column of the Text formats administration table.
     */
    public static $textFormatsTableSelector = '//*[@id="text-format-order"]//tr/td[1]';

    /**
     * Routing.
     *
     * @param string $param
     *   The 3rd path argument (/admin/config/content/formats/$param)
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
            case 'add':
                return static::URL . '/' . $param;
        }
        throw new \Exception('Invalid route parameter passed to AdminTextFormats PageObject.');
    }
}
