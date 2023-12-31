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

namespace Pimcore\Bundle\CoreBundle\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Pimcore\Migrations\Migration\AbstractPimcoreMigration;

class Version20181008132414 extends AbstractPimcoreMigration
{
    public function doesSqlMigrations(): bool
    {
        return true;
    }

    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE `objects` ADD COLUMN `o_versionCount` INT UNSIGNED NULL DEFAULT \'0\' AFTER `o_childrenSortBy`;');
        $this->addSql('ALTER TABLE `documents`ADD COLUMN `versionCount` INT UNSIGNED NULL DEFAULT \'0\' AFTER `userModification`;');
        $this->addSql('ALTER TABLE `assets` ADD COLUMN `versionCount` INT UNSIGNED NOT NULL DEFAULT \'0\' AFTER `hasMetaData`;');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE `objects` DROP COLUMN `o_versionCount`;');
        $this->addSql('ALTER TABLE `documents` DROP COLUMN `versionCount`;');
        $this->addSql('ALTER TABLE `assets` DROP COLUMN `versionCount`;');
    }
}
