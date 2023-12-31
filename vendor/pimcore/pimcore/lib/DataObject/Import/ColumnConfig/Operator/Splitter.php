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

namespace Pimcore\DataObject\Import\ColumnConfig\Operator;

use Pimcore\DataObject\Import\ColumnConfig\AbstractConfigElement;

/**
 * @deprecated since v6.9 and will be removed in Pimcore 10.
 */
class Splitter extends AbstractOperator
{
    /**
     * @var string
     */
    private $glue;

    public function __construct(\stdClass $config, $context = null)
    {
        parent::__construct($config, $context);

        $this->glue = $config->glue;
    }

    public function process($element, &$target, array &$rowData, $colIndex, array &$context = [])
    {
        $originalCellData = $rowData[$colIndex];

        $childs = $this->getChilds();

        if (!$childs) {
            return;
        } else {
            $dataParts = explode($this->glue, $originalCellData);

            for ($i = 0; $i < count($childs); $i++) {
                /** @var AbstractConfigElement $child */
                $child = $childs[$i];

                if (isset($dataParts[$i])) {
                    $rowData[$colIndex] = $dataParts[$i];

                    $child->process($element, $target, $rowData, $colIndex, $context);
                }
            }
        }

        $rowData[$colIndex] = $originalCellData;
    }
}
