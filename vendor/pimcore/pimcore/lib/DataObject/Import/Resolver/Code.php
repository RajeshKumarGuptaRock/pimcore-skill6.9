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

namespace Pimcore\DataObject\Import\Resolver;

use Pimcore\Localization\LocaleServiceInterface;

/**
 * @deprecated since v6.9 and will be removed in Pimcore 10.
 */
class Code extends AbstractResolver
{
    /**
     * @var LocaleServiceInterface
     */
    private $localeService;

    public function __construct(LocaleServiceInterface $localeService)
    {
        $this->localeService = $localeService;
    }

    public function resolve(\stdClass $config, int $parentId, array $rowData)
    {
        /** @var ResolverInterface $resolverImplementation */
        $resolverImplementation = new $config->resolverSettings->phpClass();

        if (!$resolverImplementation) {
            throw new ImportErrorException('could not resolve service: ' . $config->resolverSettings->service);
        }

        $currentLocale = $this->localeService->getLocale();

        $locale = null;
        if ($config->resolverSettings) {
            if ($config->resolverSettings && 'default' !== $config->resolverSettings->language) {
                $this->localeService->setLocale($config->resolverSettings->language);
            }
        }

        $object = $resolverImplementation->resolve($config, $parentId, $rowData);

        $this->localeService->setLocale($currentLocale);

        if (!$object) {
            throw new ImportErrorException('Could not resolve object');
        }

        return $object;
    }
}
