<?php
/**
 * @file
 * Admin page for Structure.
 */

namespace Codeception\Module\Drupal\Pages;

/**
 * Class AdminTaxonomyPage
 */
class AdminTaxonomyPage extends Page
{
    /**
     * Base URL/path to this page.
     */
    const URL = 'admin/structure/taxonomy';

    /**
     * The field used to fill in the vocabulary name when adding a vocabulary.
     *
     * @var string
     */
    public static $vocabularyAddNameFieldSelector = '#edit-name';

    /**
     * The selector to find the "edit" button that opens the machine name editing field.
     *
     * Usually the machine name is automatically set, but there is an "edit" button that allows the manual manipulation
     * of machine names.
     *
     * @var string
     */
    public static $vocabularyAddMachineNameEditSelector = '#edit-name-machine-name-suffix';

    /**
     * The field used to fill in the machine name when adding a vocabulary.
     *
     * @var string
     */
    public static $vocabularyAddMachineNameFieldSelector = '#edit-machine-name';

    /**
     * The button used to save the new vocabulary when adding a vocabulary.
     *
     * @var string
     */
    public static $vocabularyAddSaveButtonSelector = '#edit-submit';

    /**
     * Button on the edit vocabulary page that will delete a vocabulary.
     *
     * @var string
     */
    public static $vocabularyEditDeleteButtonSelector = '#edit-delete';

    /**
     * Button to confirm deletion of a vocabulary.
     *
     * @var string
     */
    public static $vocabularyEditDeleteConfirmButtonSelector = '#edit-submit';

    /**
     * Selector for the term name field on the taxonomy term add page.
     *
     * @var string
     */
    public static $termAddNameFieldSelector = '#edit-name';

    /**
     * Selector for the save button on the taxonomy term add page.
     *
     * @var string
     */
    public static $termAddSaveButtonSelector = '#edit-submit';

    /**
     * XPath to get the a element that contains the term ID for a term with a specific name on the term list page.
     *
     * @var string
     */
    public static $termListTermNameSelector = '//a[text() = "%s"]/../../td[3]/a';

    /**
     * XPath to the element that contains the field machine name on the term list page.
     *
     * @var string
     */
    public static $fieldMachineNameSelector = "//table[@id='field-overview']//td";

    /**
     *  route().
     *
     * @param string $param
     *   The 3rd path argument (/admin/structure/taxonomy/$param)
     * @param string $op
     *   The operation to be performed. If left blank, the $param argument will just be added to the base URL of
     *   admin/structure/taxonomy/.
     *
     *   Possible ops:
     *   - termAdd: add a taxonomy term to a vocabulary. $param should be the URL name of the vocabulary.
     *   - termList: list of terms in a vocabulary. $param should be the URL name of the vocabulary.
     *   - vocabularyAdd: add a new vocabulary. $param is not needed.
     *   - vocabularyEdit: page to edit a vocabulary. $param should be the URL name of the vocabulary.
     *
     * @return string
     *   The correct relative path to the page.
     */
    public static function route($param = '', $op = '')
    {
        $pieces = array(static::URL);

        switch ($op) {
            case 'termList':
                $pieces[] = $param;
                break;

            case 'termAdd':
                $pieces[] = $param;
                $pieces[] = 'add';
                break;

            case 'vocabularyAdd':
                $pieces[] = 'add';
                break;

            case 'vocabularyEdit':
                $pieces[] = $param;
                $pieces[] = 'edit';
                break;

            case '':
            default:
                $pieces[] = $param;
                break;
        }

        return implode('/', $pieces);
    }
}
