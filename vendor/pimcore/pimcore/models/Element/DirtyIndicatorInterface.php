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

namespace Pimcore\Model\Element;

interface DirtyIndicatorInterface
{
    /**
     * @return bool
     */
    public function hasDirtyFields();

    /**
     * @param string $key
     *
     * @return bool
     */
    public function isFieldDirty($key);

    /**
     * marks the given field as dirty
     *
     * @param string $field
     * @param bool $dirty
     *
     * @return mixed
     */
    public function markFieldDirty($field, $dirty = true);

    public function resetDirtyMap();
}

//TODO: remove in Pimcore 10
class_alias(DirtyIndicatorInterface::class, 'Pimcore\Model\DataObject\DirtyIndicatorInterface');
