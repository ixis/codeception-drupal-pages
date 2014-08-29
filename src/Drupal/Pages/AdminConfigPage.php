<?php
/**
 * @file
 * Admin page for Configuration.
 */

namespace Codeception\Module\Drupal\Pages;

use Codeception\Exception\TestRuntime as RuntimeException;

/**
 * Class AdminConfigPage.
 */
class AdminConfigPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'admin/config/%config_area%/%selection%';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Service Links';

    /**
     * Implements route().
     *
     * Allows route to be selected for /admin/config/.
     *
     * @param $selection
     * @param string $configArea
     * @param $selection
     *
     * @return mixed|string
     *
     * @throws RuntimeException
     */
    public static function route($configArea, $selection)
    {
        if (isset($selection) && isset($configArea)) {
            $needle = str_replace('%config_area%', $configArea, static::$URL);
            $haystack = str_replace('%selection%', $selection, $needle);
            return $haystack;
        } else {
            // Bad selection was provided.
            throw new RuntimeException("Not a valid config area selection.");
        }
    }
}
