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
 * @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 * @license    http://www.pimcore.org/license     GPLv3 and PCL
 */
?>

<?php foreach ($this->calls as $call => $callData): ?>
    ga('ec:addProduct', <?= json_encode($callData) ?>);
<?php endforeach; ?>

ga('ec:setAction', 'checkout', <?= json_encode($this->actionData) ?>);
ga('send', 'event', 'Checkout', 'Step');
