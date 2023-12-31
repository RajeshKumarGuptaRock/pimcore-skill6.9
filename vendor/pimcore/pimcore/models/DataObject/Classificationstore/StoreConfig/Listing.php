<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace Pimcore\Model\DataObject\Classificationstore\StoreConfig;

use Pimcore\Model;

/**
 * @method \Pimcore\Model\DataObject\Classificationstore\StoreConfig\Listing\Dao getDao()
 * @method Model\DataObject\Classificationstore\StoreConfig[] load()
 * @method Model\DataObject\Classificationstore\StoreConfig current()
 * @method int getTotalCount()
 */
class Listing extends Model\Listing\AbstractListing
{
    /**
     * @var Model\DataObject\Classificationstore\StoreConfig[]|null
     *
     * @deprecated use getter/setter methods or $this->data
     */
    protected $list = null;

    public function __construct()
    {
        $this->list = & $this->data;
    }

    /**
     * @return Model\DataObject\Classificationstore\StoreConfig[]
     */
    public function getList()
    {
        return $this->getData();
    }

    /**
     * @param Model\DataObject\Classificationstore\StoreConfig[]|null $theList
     *
     * @return static
     */
    public function setList($theList)
    {
        return $this->setData($theList);
    }
}
