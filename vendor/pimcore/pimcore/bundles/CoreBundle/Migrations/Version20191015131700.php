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

class Version20191015131700 extends AbstractPimcoreMigration
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
        $this->addSql("ALTER TABLE `gridconfigs` ADD COLUMN `type` enum('asset','object') COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT 'object' AFTER `searchType`;");
        $this->addSql("ALTER TABLE `gridconfig_favourites` ADD COLUMN `type` enum('asset','object') COLLATE 'utf8mb4_general_ci' NOT NULL DEFAULT 'object';");
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql("DELETE from `gridconfigs` WHERE `type` = 'asset';");
        $this->addSql("DELETE from `gridconfig_favourites` WHERE `type` = 'asset';");
        $this->addSql('ALTER TABLE `gridconfigs` DROP COLUMN `type`;');
        $this->addSql('ALTER TABLE `gridconfig_favourites` DROP COLUMN `type`;');
    }
}
