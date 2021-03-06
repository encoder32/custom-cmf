<?php
/**
 * This file is part of the Custom CMF.
 *
 * @link      https://github.com/itcreator/custom-cmf for the canonical source repository
 * @copyright Copyright (c) 2012 Vital Leshchyk <vitalleshchyk@gmail.com>
 * @license   https://github.com/itcreator/custom-cmf/blob/master/LICENSE
 */

namespace Cmf\Article\Controller;

/**
 * Category controller for articles
 *
 * @author Vital Leshchyk <vitalleshchyk@gmail.com>
 */
class CategoryController extends \Cmf\Category\Controller\CategoryController
{
    /** @var string */
    protected $entityName = 'Cmf\Article\Model\Entity\Category';

    /** @var string */
    protected $fieldConfigKey = 'categoryField';
}
