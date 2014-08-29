<?php
/**
 * @file
 * Base class to represent a page on a
 */

namespace Codeception\Module\Drupal\Pages;

use Codeception\Configuration;
use Codeception\Util\Fixtures;

/**
 * Class Page.
 */
class Page
{
    /**
     * Key used for Drupal/site configuration in acceptance.suite.yml
     */
    const DRUPAL_MODULE_CONFIG_KEY = 'Drupal';

    /**
     * Search results author selector.
     *
     * @var string
     */
    public static $searchResultsAuthor = '#username';

    /**
     * Navigation bar selector.
     *
     * @var string
     */
    public static $navbarSelector = '#navbar';

    /**
     * CSS selector for the breadcrumb.
     *
     * @var string
     */
    public static $breadcrumbSelector = '.breadcrumb';

    /**
     * Page title selector.
     *
     * @var string
     */
    public static $pageTitleSelector = 'h1';

    /**
     * Page title selector for the default admin theme (Seven).
     *
     * @var string
     */
    public static $adminPageTitleSelector = 'h1.page-title';

    /**
     * Panel pane title selector.
     *
     * @var string
     */
    public static $paneTitleSelector = 'h3.pane-title';

    /**
     * Panel pane subtitle selector.
     *
     * @var string
     */
    public static $paneSubTitleSelector = 'h4.pane-title';

    /**
     * CSS class selector for Drupal 'action links'.
     *
     * @var string
     */
    public static $actionLinksSelector = '.action-links';

    /**
     * Selector for Drupal messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalMessageSelector = '.alert';

    /**
     * Selector for Drupal error messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalErrorMessageSelector = '.alert-danger';

    /**
     * Selector for Drupal messages set by drupal_set_message() in the Seven admin theme.
     *
     * @var string
     */
    public static $drupalAdminMessageSelector = '.messages';

    /**
     * Selector for Drupal error messages set by drupal_set_message() in the Seven admin theme.
     *
     * @var string
     */
    public static $drupalAdminErrorMessageSelector = '.messages.error';

    /**
     * CSS selector for the footer element or region.
     *
     * @var string
     */
    public static $footerRegionSelector = '.footer';

    /**
     * CSS selector for the footer links element or region.
     *
     * @var string
     */
    public static $footerLinksRegionSelector = '.footer-links';

    /**
     * CSS selector for the primary tabs.
     *
     * @var string
     */
    public static $editTabSelector = '.nav-tabs.primary';

    /**
     * CSS selector for the primary tabs (in administration theme).
     *
     * @var string
     */
    public static $adminEditTabSelector = '.tabs';


    /**
     * CSS selector for vertical tabs (in administration theme).
     *
     * @var string
     */
    public static $adminVerticalTabPaneSelector = '.vertical-tabs-panes';

    /**
     * XPath selector used to grab the anchor link within a node's edit tab.
     *
     * @var string
     */
    public static $nodeEditTabLinkSelector =
        '//div[@class="tabs"]//ul[contains(@class,"nav-tabs primary")]/li[2]/a';

    /**
     * Selector to detect if drupal core blocks present.
     *
     * @var string
     */
    public static $defaultCoreBlocksSelector = "#block-user-login";

    /**
     * Selector for nodequeue action links.
     *
     * @var string
     */
    public static $nodeQueueLink = 'ul.action-links';

    /**
     * Selector for field collection add new placeholder.
     *
     * @var string
     */
    public static $fieldCollectionPlaceholder = 'div.add-new-placeholder';

    /**
     * Helper method to retrieve specific elements of Drupal configuration set in
     * acceptance.suite.yml configuration.
     *
     * @todo: make this not hardcoded to the acceptance suite.
     *
     * @param string $key
     *   The key of the configuration pair to retrieve.
     *
     * @return mixed|null
     *   The value of the configuration key, or NULL if not found.
     *
     * @throws \Codeception\Exception\Configuration
     */
    public static function drupalConfig($key)
    {
        // Get Drupal configuration.
        $config = array();
        $s = Configuration::suiteSettings('youthspace', Configuration::config());
        if (isset($s['modules']['config'])) {
            $config = $s['modules']['config'];
        }
        if (empty($config)) {
            throw new \Codeception\Exception\Configuration("Configuration file is invalid");
        }

        // Check if setting for $key is overwritten in any current environment
        // configuration.
        $env = self::getCurrentEnvironment();
        if (isset($s['env'][$env]['modules']['config'][self::DRUPAL_MODULE_CONFIG_KEY][$key])) {
            return $s['env'][$env]['modules']['config'][self::DRUPAL_MODULE_CONFIG_KEY][$key];
        }

        // Otherwise return the base configuration value.
        if (isset($config[self::DRUPAL_MODULE_CONFIG_KEY][$key])) {
            return $config[self::DRUPAL_MODULE_CONFIG_KEY][$key];
        }

        // Nothing was found.
        return null;
    }

    /**
     * Returns the current environment the suite is running in.
     *
     * @todo See if there's a better way...
     * @todo Is it possible to use Symfony Application object available in $GLOBALS?
     *
     * @return string|null
     *   Current environment name or NULL if none has been specified.
     */
    protected static function getCurrentEnvironment()
    {
        // Forgive me.
        $envArgument = array_shift(preg_grep('/^--env=/', $GLOBALS['argv']));
        if (!is_null($envArgument)) {
            list(,$env) = explode('=', $envArgument);
            return (string) $env;
        }
        return null;
    }

    /**
     * Routing for basic pages.
     *
     * This function merely translates commonly used elements in the URL.
     *
     * @param string $input
     *   The raw input to be translated.
     *
     * @return string
     *   The URL-safe output.
     */
    public static function route($input = '')
    {
        return str_replace('_', '-', $input);
    }
}
