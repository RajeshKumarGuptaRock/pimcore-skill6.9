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

class Version20200226102938 extends AbstractPimcoreMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        if ($schema->getTable('dependencies')->hasIndex('sourceid')) {
            $this->addSql('ALTER TABLE `dependencies`
                DROP INDEX `sourceid`,
                DROP INDEX `targetid`,
                DROP INDEX `targettype`,
                DROP PRIMARY KEY
            ');

            $this->addSql('ALTER TABLE `dependencies`
                ADD COLUMN `id` BIGINT NOT NULL AUTO_INCREMENT FIRST,
                ADD UNIQUE INDEX `combi` (`sourcetype`, `sourceid`, `targettype`, `targetid`),
                ADD INDEX `targettype_targetid` (`targettype`, `targetid`),
                ADD PRIMARY KEY (`id`);
            ');
        }
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        if ($schema->getTable('dependencies')->hasColumn('id')) {
            $this->addSql('ALTER TABLE `dependencies`
                DROP COLUMN `id`,
                DROP PRIMARY KEY,
                DROP INDEX `combi`,
                DROP INDEX `targettype_targetid`;
            ');

            $this->addSql('ALTER TABLE `dependencies`
                ADD PRIMARY KEY (`sourcetype`, `sourceid`, `targettype`, `targetid`),
                ADD INDEX `sourceid` (`sourceid`),
                ADD INDEX `targetid` (`targetid`),
                ADD INDEX `targettype` (`targettype`);
            ');
        }
    }
}
