<?php
/**
 * @file
 * Base class to represent a page on a
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class Page.
 */
class Page
{
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
    public static $drupalMessageSelector = '.status';

    /**
     * Selector for Drupal error messages set by drupal_set_message().
     *
     * @var string
     */
    public static $drupalErrorMessageSelector = '.error';

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
    public static $editTabSelector = '.tabs';

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
    public static $adminVerticalTabPaneSelector = '.vertical-tab-button';

    /**
     * XPath selector used to grab the anchor link within a node's edit tab.
     *
     * @var string
     */
    public static $nodeEditTabLinkSelector =
        '//div[@class="tabs"]//ul[contains(@class,"tabs primary")]/li[2]/a';

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
