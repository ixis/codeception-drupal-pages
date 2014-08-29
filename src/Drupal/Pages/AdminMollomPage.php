<?php
/**
 * @file
 * PageObject for /admin/config/content/mollom (Mollom module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminMollomPage.
 */
class AdminMollomPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/content/mollom';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Mollom content moderation';

    /**
     * @var string
     *   Text used in the link to add a Mollom form configuration.
     */
    public static $addRedirectLinkText = 'Add form';

    /**
     * Routing.
     *
     * @param string $task
     *   A valid task to append to the end of the URL.
     *
     * @return string
     *   The correct relative path to the page.
     */
    public static function route($task = '')
    {
        if (empty($task)) {
            return static::URL;
        }

        switch ($task) {
            case 'add':
                return static::URL . '/' . $task;

            default:
                return static::URL;
        }
    }
}
