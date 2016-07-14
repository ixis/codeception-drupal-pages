<?php
/**
 * @file
 * Admin page for Structure.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminEntityQueueEditPage
 */
class AdminEntityQueueSimpleEditPage
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/entityqueue/list/%s/subqueues/%s/edit';

    /**
     * @var string
     *   Selector for the autocomplete text field.
     */
    public static $autoCompleteSelector = ".entityqueue-dragtable-eq-file-add.form-autocomplete";

    /**
     * @var string
     *   Selector to determine if the entity is in the queue.
     */
    protected static $titleInQueueSelector = "//td/a[.='%s']";

    /**
     * @param string $title
     *   The entity title.
     *
     * @return string
     *   The selector to determine if the entity is in the queue.
     */
    public static function elementInQueueSelector($title)
    {
        return sprintf(self::$titleInQueueSelector, $title);
    }

    /**
     * Return an entity queue path.
     *
     * @param string $queue_name
     *   Entity queue name.
     * @param int $subqueue
     *   Subqueue id.
     *
     * @return string
     *   The path.
     */
    public static function route($queue_name, $subqueue = 1)
    {
        return sprintf(self::URL, $queue_name, $subqueue);
    }
}
