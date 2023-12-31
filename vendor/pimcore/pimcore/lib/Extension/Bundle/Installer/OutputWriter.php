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

namespace Pimcore\Extension\Bundle\Installer;

use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Console\Output\Output;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * @deprecated will be removed in Pimcore 10, use OutputInterface instead
 */
class OutputWriter implements OutputWriterInterface
{
    /**
     * @var Output
     */
    private $output;

    /**
     * @var \Closure
     */
    private $closure;

    public function __construct(\Closure $closure = null, BufferedOutput $output = null)
    {
        $this->closure = $closure;

        if (null === $output) {
            $output = new BufferedOutput(Output::VERBOSITY_NORMAL, true);
        }

        $this->output = $output;
    }

    /**
     * @inheritDoc
     */
    public function write($message)
    {
        $this->output->writeln($message);

        if (null !== $this->closure) {
            $closure = $this->closure;
            $closure($message);
        }
    }

    public function getOutputInstance(): OutputInterface
    {
        return $this->output;
    }

    public function getOutput()
    {
        return $this->output->fetch();
    }
}
