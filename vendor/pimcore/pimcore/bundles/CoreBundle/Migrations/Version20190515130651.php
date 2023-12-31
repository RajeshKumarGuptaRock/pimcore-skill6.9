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

class Version20190515130651 extends AbstractPimcoreMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `cid` `cid` int(11) NOT NULL;');
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `name` `name` varchar(190) NOT NULL;');
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `language` `language` varchar(10) COLLATE \'ascii_general_ci\' NULL AFTER `cid`;');
        $this->addSql('ALTER TABLE `assets_metadata` ADD PRIMARY KEY `cid_name_language` (`cid`, `name`, `language`);');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE `assets_metadata` DROP INDEX `PRIMARY`;');
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `language` `language` varchar(190) COLLATE \'utf8mb4_general_ci\' NOT NULL AFTER `cid`;');
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `cid` `cid` int(11) DEFAULT NULL;');
        $this->addSql('ALTER TABLE `assets_metadata` CHANGE `name` `name` varchar(190) DEFAULT NULL;');
    }
}
