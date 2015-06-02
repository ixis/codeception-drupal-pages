<?php
/**
 * @file
 * Defines elements of various user account pages, such as login and register.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class UserPasswordResetPage.
 */
class UserPasswordResetPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'user/password';

    /**
     * Title of the reset password page.
     *
     * @var string
     */
    public static $passwordResetPageTitle = 'Request new password';

    /**
     * CSS for the username/email form field.
     *
     * @var string
     */
    public static $usernameSelector = '#edit-name';

    /**
     * CSS for the form submit button..
     *
     * @var string
     */
    public static $submitSelector = '#edit-submit';

    /**
     * Get route for current page.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route()
    {
        return static::$URL;
    }
}
