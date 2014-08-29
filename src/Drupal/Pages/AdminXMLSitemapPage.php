<?php
/**
 * @file
 * PageObject for /admin/config/search/xmlsitemap (XML Sitemap module).
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminXMLSitemapPage.
 */
class AdminXMLSitemapPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/config/search/xmlsitemap';

    /**
     * @var string
     *   Page title.
     */
    public static $pageTitle = 'XML sitemap';

    /**
     * @var string
     *   Selector for the Container ID form element.
     */
    public static $containerIdElementSelector = '#edit-google-tag-container-id';

    /**
     * Routing.
     *
     * @return string
     *   The correct relative path to the page.
     */
    public static function route()
    {
        return static::URL;
    }
}
