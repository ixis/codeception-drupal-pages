<?php
/**
 * @file
 * Administration page for adding nodes.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminNodeAddPage
 *
 * @package Codeception\Module\Drupal\Pages
 */
class AdminNodeAddPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'node/add';

    /**
     * @var string
     *   Submit button selector.
     */
    public static $submitSelector = "#edit-submit";

    /**
     * @var string
     *   View node preview.
     */
    public static $editPreviewSelector = '#edit-preview';

    /**
     * Basic route example.
     *
     * @param string $type
     *   The content type to generate a path for.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route($type = '')
    {
        if ($type == '') {
            // No type provided, so assume we are on the main "add content"
            // page.
            return static::$URL;

        } else {
            // A special case for panel pages, which have an extra step in the "create node" process.
            // @todo: at the moment, the panel name is hardcoded which might not be ideal.
            if ($type == 'panel') {
                return 'node/add/panel/flexible';
            }

            $type = parent::route($type);
            return static::$URL . '/' . $type;
        }
    }

    /**
     * {@inheritdoc}
     *
     * @param string $type
     *   The content type in question. Optional.
     */
    public static function getTitle($type = '')
    {
        if ($type == '') {
            // No type provided, so assume we are on the main "add content"
            // page.
            return 'Add content';
        } else {
            $types = static::$contentTypes;
            $myType = $types[$type];

            return 'Create ' . $myType['name'];
        }
    }
}
