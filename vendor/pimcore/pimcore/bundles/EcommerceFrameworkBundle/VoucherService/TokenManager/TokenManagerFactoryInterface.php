<?php

declare(strict_types=1);

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

namespace Pimcore\Bundle\EcommerceFrameworkBundle\VoucherService\TokenManager;

use Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractVoucherTokenType;

interface TokenManagerFactoryInterface
{
    public function getTokenManager(AbstractVoucherTokenType $configuration): TokenManagerInterface;
}

class_alias(TokenManagerFactoryInterface::class, 'Pimcore\Bundle\EcommerceFrameworkBundle\VoucherService\TokenManager\ITokenManagerFactory');
