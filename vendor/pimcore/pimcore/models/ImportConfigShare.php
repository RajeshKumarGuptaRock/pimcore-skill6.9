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

namespace Pimcore\Model;

/**
 * @method \Pimcore\Model\ImportConfigShare\Dao getDao()
 *
 * @deprecated since v6.9 and will be removed in Pimcore 10.
 */
class ImportConfigShare extends AbstractModel
{
    /**
     * @var int
     */
    public $importConfigId;

    /**
     * @var int
     */
    public $sharedWithUserId;

    /**
     * @param int $importConfigId
     * @param int $sharedWithUserId
     *
     * @return ImportConfigShare
     */
    public static function getByImportConfigAndSharedWithId($importConfigId, $sharedWithUserId)
    {
        $share = new self();
        $share->getDao()->getByImportConfigAndSharedWithId($importConfigId, $sharedWithUserId);

        return $share;
    }

    /**
     * @throws \Exception
     */
    public function save()
    {
        $this->getDao()->save();
    }

    /**
     * Delete this share
     */
    public function delete()
    {
        $this->getDao()->delete();
    }

    /**
     * @return int
     */
    public function getImportConfigId(): int
    {
        return $this->importConfigId;
    }

    /**
     * @param int $importConfigId
     */
    public function setImportConfigId(int $importConfigId)
    {
        $this->importConfigId = $importConfigId;
    }

    /**
     * @return int
     */
    public function getSharedWithUserId(): int
    {
        return $this->sharedWithUserId;
    }

    /**
     * @param int $sharedWithUserId
     */
    public function setSharedWithUserId(int $sharedWithUserId)
    {
        $this->sharedWithUserId = $sharedWithUserId;
    }
}
