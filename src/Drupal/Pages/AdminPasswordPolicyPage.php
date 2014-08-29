<?php
/**
 * @file
 * PageObject for /admin/config/people/password_policy (Password Policy module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminPasswordPolicyPage.
 */
class AdminPasswordPolicyPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/people/password_policy';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'Password policies';

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
            case 'list':
            case 'add':
            case 'password_change':
                return static::URL . '/' . $task;

            default:
                return static::URL;
        }
    }
}
