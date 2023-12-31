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

namespace Pimcore\Tests\Rest\DataType;

use Pimcore\Model\DataObject\AbstractObject;
use Pimcore\Model\DataObject\Unittest;
use Pimcore\Tests\Test\DataType\AbstractDataTypeRestTestCase;
use Pimcore\Tests\Util\TestHelper;

/**
 * @group dataTypeIn
 */
class DataTypeInTest extends AbstractDataTypeRestTestCase
{
    /**
     * Creates unsaved object locally, saves it via API and loads comparison object directly
     *
     * @inheritDoc
     */
    protected function createTestObject($fields = [])
    {
        $object = TestHelper::createEmptyObject('local', false, true);
        $this->fillObject($object, $fields);

        $response = $this->restClient->createObjectConcrete($object);

        $this->assertTrue($response->success);

        /** @var Unittest $localObject */
        $localObject = AbstractObject::getById($response->id);

        $this->assertNotNull($localObject);
        $this->assertInstanceOf(Unittest::class, $localObject);

        $this->testObject = $localObject;
        $this->comparisonObject = $object;

        return $this->testObject;
    }
}
