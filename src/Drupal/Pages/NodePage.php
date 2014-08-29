<?php
/**
 * @file
 * Routing and structural elements of node/* pages.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class NodePage.
 */
class NodePage extends Page
{
    public static $unpublishButton = '#edit-draft';

    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'node';

    /**
     * @var string
     *   CSS selector for primary tabs on node view pages.
     */
    public static $primaryTabsSelector = '.tabs.primary';

    /**
     * @var string
     *   CSS ID of the Title field when editing nodes.
     */
    public static $editFormTitleID = '#edit-title';

    /**
     * @var string
     *   CSS ID of the Body field when editing nodes.
     */
    public static $editFormBodyID = '#edit-body-und-0-value';

    /**
     * @var string
     *   CSS ID of the Status (Published) checkbox.
     */
    public static $editFormStatusID = '#edit-status';

    /**
     * Basic route example.
     *
     * @param int $nid
     *   The node ID of the node. Optional.
     * @param bool $edit
     *   Whether to get the URL for editing the node. Defaults to false.
     *
     * @return string
     *   Complete path to the page.
     *
     * @throws \Codeception\Exception\TestRuntime
     */
    public static function route($nid = 0, $edit = false)
    {
        // Force conversion to string because Codeception uses the Maybe class
        // to represent proper parameters.
        $nid = (string) $nid;
        $pathSuffix = '';

        if (is_numeric($nid) && $nid > 0) {
            $pathSuffix = '/' . $nid;

            if ($edit) {
                $pathSuffix .= '/edit';
            }
        }

        return static::$URL . $pathSuffix;
    }
}
