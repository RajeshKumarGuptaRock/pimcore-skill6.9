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

class Version20200212130011 extends AbstractPimcoreMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        $this->addSql('ALTER TABLE `redirects` ROW_FORMAT=DYNAMIC');
        $this->addSql('ALTER TABLE `redirects` DROP INDEX `active`');
        $this->addSql('ALTER TABLE `redirects` ADD INDEX `routing_lookup` (`active`, `regex`, `sourceSite`, `source`, `type`, `expiry`, `priority`)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        $this->addSql('ALTER TABLE `redirects` DROP INDEX `routing_lookup`');
        $this->addSql('ALTER TABLE `redirects` ADD INDEX `active` (`active`)');
    }
}
