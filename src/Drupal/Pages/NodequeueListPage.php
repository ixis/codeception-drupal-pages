<?php
/**
 * @file
 * Defines elements of various user account pages, such as login and register.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class NodequeueListPage.
 */
class NodequeueListPage extends Page
{
    /**
     * @var string
     *   URL/path to this page.
     */
    protected static $URL = '/admin/structure/nodequeue';

    /**
     * @var string
     *   Selector for Edit link for a queue.
     */
    public static $queueEditLinkSelector =
      "//td[@class='nodequeue-title active' and contains(text(), '%s')]/..//a[contains(@href, '/edit')]";

    /**
     * @var string
     *   Selector for View link for a queue.
     */
    public static $queueViewLinkSelector =
      "//td[@class='nodequeue-title active' and contains(text(), '%s')]/..//a[contains(@href, '/view')]";

    /**
     * @var string
     *   Selector for nodequeue title.
     */
    public static $nodequeueTitleSelector = "td.nodequeue-title";

    /**
     * @var string
     *   Selector for a nodequeue row. Use sprintf and populate %d with the queue position.
     */
    public static $nodequeuePositionSelector = "//table[contains(@class, 'nodequeue-dragdrop')]/tbody/tr[%d]";

    /**
     * Get route.
     *
     * @return string
     */
    public static function route()
    {
        return self::$URL;
    }
}
