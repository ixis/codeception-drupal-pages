<?php
/**
 * @file
 * Defines elements of various user account pages, such as login and register.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class UserAccountPage.
 */
class UserAccountPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = 'user';

    /**
     * @var string
     *   Title of the login page.
     */
    public static $loginPageTitle = 'User account';

    /**
     * @var string
     *   CSS Id of the username form field.
     */
    public static $loginFormUsernameSelector = '#edit-name';

    /**
     * @var string
     *   CSS Id of the password form field.
     */
    public static $loginFormPasswordSelector = '#edit-pass';

    /**
     * @var string
     *   CSS Id of the login form submit button..
     */
    public static $loginFormSubmitSelector = '#edit-submit';

    /**
     * @var string
     *   The message displayed when a login fails.
     */
    public static $loginFormCredentialsErrorMessage = 'Sorry, unrecognized username or password.';

    /**
     * Basic route example.
     *
     * @param string $param
     *   The task to generate a path for.
     *
     * @return string
     *   Complete path to the page.
     */
    public static function route($param = '')
    {
        return static::$URL . '/' . $param;
    }
}
