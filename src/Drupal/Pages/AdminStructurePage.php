<?php
/**
 * @file
 * Admin page for Structure.
 */

namespace Codeception\Module\Drupal\Pages;

use Codeception\Exception\TestRuntime as RuntimeException;

/**
 * Class AdminStructurePage
 * @package Youthspace\Pages
 */
class AdminStructurePage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure';

    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/structure/%selection%';

    /**
     * @var string
     *   The name of content type title field when creating/editing a type.
     */
    public static $contentTypeNameSelector = '#edit-name';

    /**
     * @var array
     *   Defines some XPath selectors for the field overview table.
     */
    public static $contentTypeFieldOverviewSelectors = array(
      'humanName'   => '//*//table[@id="field-overview"]//*//td[2]',
      'machineName' => '//*//table[@id="field-overview"]//*//td[4]',
    );

    /**
     * Implements route().
     *
     * @param string $param
     *   The 3rd path argument (/admin/structure/$param)
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($param = '')
    {
        $param = parent::route($param);

        switch ($param) {
            case 'types':
                return static::URL . '/' . $param;
        }

        // Otherwise, we may have been sent a longer path, e.g. types/manage/$type/fields
        if (0 == strpos($param, 'types/manage')) {
            // @todo Better checking on these paths.
            return static::URL . '/' . $param;
        }
        throw new RuntimeException('Invalid route parameter passed to AdminStructure PageObject.');
    }
}
