<?php
/**
 * @file
 * Represents a user profile page.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class UserProfilePage.
 */
class UserProfilePage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = '/users';

    /**
     * Get route.
     *
     * @param string $username
     *   The username of the user.
     *
     * @return string
     */
    public static function route($username)
    {
        $username = str_replace('.', '', $username);

        return self::$URL . '/' . $username;
    }
}
