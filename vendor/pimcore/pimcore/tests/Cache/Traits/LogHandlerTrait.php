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

namespace Pimcore\Tests\Cache\Traits;

use Monolog\Handler\BufferHandler;
use Monolog\Handler\HandlerInterface;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\TestHandler;
use Monolog\Logger;

trait LogHandlerTrait
{
    /**
     * @var Logger
     */
    protected static $logger;

    /**
     * @var HandlerInterface[]
     */
    protected static $logHandlers = [];

    /**
     * Set up a logger with a buffer and a test handler (can be printed to STDOUT on demand)
     *
     * @param string $name
     */
    protected static function setupLogger($name)
    {
        static::$logHandlers = [
            'buffer' => new BufferHandler(new StreamHandler('php://stdout')),
            'test' => new TestHandler(),
        ];

        static::$logger = new Logger($name, array_values(static::$logHandlers));
    }

    /**
     * Flush buffer handler if TEST_LOG env var is set
     */
    protected static function handleLogOutput()
    {
        /** @var BufferHandler $bufferHandler */
        $bufferHandler = static::$logHandlers['buffer'];
        if (!$bufferHandler) {
            return;
        }

        // call tests with TEST_LOG=1 if you need logs (e.g. during development)
        if ((bool)getenv('TEST_LOG')) {
            echo PHP_EOL;
            $bufferHandler->flush();
            echo PHP_EOL;
        } else {
            // just throw the logs away
            $bufferHandler->clear();
        }
    }
}
