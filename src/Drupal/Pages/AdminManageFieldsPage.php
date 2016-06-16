<?php
/**
 * @file
 * Admin page for managing fields on a content type.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminManageFieldsPage
 */
class AdminManageFieldsPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/structure/types/manage/%selection%/fields';

    /**
     * Used to select the machine name column of the fields table.
     *
     * @var string
     */
    public static $machineNameSelector = '//td[text() = "%s"]';

    /**
     * Used to select the human name column of the fields table.
     *
     * @var string
     */
    public static $humanNameSelector = '//td[text() = "%s"]/../td[1]';

    /**
     * Used to select the field type column of the fields table.
     *
     * @var string
     */
    public static $fieldTypeSelector = '//td[text() = "%s"]/../td[5]';

    /**
     * Used to select the widget column of the fields table.
     *
     * @var string
     */
    public static $widgetSelector = '//td[text() = "%s"]/../td[6]';

    /**
     * Implements route().
     *
     * @param string $type
     *   The content type for which to manage fields.
     *
     * @return string
     *   The correct relative path to the page.
     *
     * @throws \Exception
     */
    public static function route($type = '')
    {
        $type = parent::route($type);
        return str_replace('%selection%', $type, static::$URL);
    }

    /**
     * Get the full parameterised machine name selector.
     *
     * @param string $machineName
     *   The machine name of a field.
     *
     * @return string
     *   The full xpath used to select this field on this page.
     */
    public static function getMachineNameSelector($machineName)
    {
        return sprintf(self::$machineNameSelector, $machineName);
    }

    /**
     * Get the full parameterised human name selector.
     *
     * @param string $machineName
     *   The machine name of a field.
     *
     * @return string
     *   The full xpath used to select this field on this page.
     */
    public static function getHumanNameSelector($machineName)
    {
        return sprintf(self::$humanNameSelector, $machineName);
    }

    /**
     * Get the full parameterised field type selector.
     *
     * @param string $machineName
     *   The machine name of a field.
     *
     * @return string
     *   The full xpath used to select this field on this page.
     */
    public static function getFieldTypeSelector($machineName)
    {
        return sprintf(self::$fieldTypeSelector, $machineName);
    }

    /**
     * Get the full parameterised widget selector.
     *
     * @param string $machineName
     *   The machine name of a field.
     *
     * @return string
     *   The full xpath used to select this field on this page.
     */
    public static function getWidgetSelector($machineName)
    {
        return sprintf(self::$widgetSelector, $machineName);
    }
}
