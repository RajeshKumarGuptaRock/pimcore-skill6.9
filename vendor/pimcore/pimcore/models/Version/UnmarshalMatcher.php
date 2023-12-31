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

namespace Pimcore\Model\Version;

@trigger_error(
    'Pimcore\Model\Version\UnmarshalMatcher is deprecated since version 6.8.0 and will be removed in Pimcore 10. ' .
    ' Use ' . \Pimcore\Model\Element\DeepCopy\UnmarshalMatcher::class . ' instead.',
    E_USER_DEPRECATED
);

class_exists(\Pimcore\Model\Element\DeepCopy\UnmarshalMatcher::class);

if (false) {
    /**
     * @deprecated use \Pimcore\Model\Element\DeepCopy\UnmarshalMatcher instead.
     */
    class UnmarshalMatcher extends \Pimcore\Model\Element\DeepCopy\UnmarshalMatcher
    {
    }
}
