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

namespace Pimcore\Model\DataObject\ClassDefinition\Layout;

use Pimcore\Model;
use Pimcore\Model\DataObject\ClassDefinition\Layout\Traits\IconTrait;

class Panel extends Model\DataObject\ClassDefinition\Layout
{
    use IconTrait;

    /**
     * Static type of this element
     *
     * @var string
     */
    public $fieldtype = 'panel';

    /**
     * Width of input field labels
     *
     * @var int
     */
    public $labelWidth = 100;

    /**
     * @var string
     */
    public $layout;

    /**
     * @var bool
     */
    public $border = false;

    /**
     * @param int $labelWidth
     *
     * @return $this
     */
    public function setLabelWidth($labelWidth)
    {
        if (!empty($labelWidth)) {
            $this->labelWidth = intval($labelWidth);
        }

        return $this;
    }

    /**
     * @return int
     */
    public function getLabelWidth()
    {
        return $this->labelWidth;
    }

    /**
     * @param string $layout
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * @return bool
     */
    public function getBorder(): bool
    {
        return $this->border;
    }

    /**
     * @param bool $border
     */
    public function setBorder(bool $border): void
    {
        $this->border = $border;
    }
}
