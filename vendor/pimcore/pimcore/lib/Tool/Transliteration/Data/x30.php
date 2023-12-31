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

$base = [
  0x00 => ' ', ',', '. ', '"', '[JIS]', '"', '/', '0', '<', '> ', '<<', '>> ', '[', '] ', '{', '} ',
  0x10 => '[(', ')] ', '@', 'X ', '[', '] ', '[[', ']] ', '((', ')) ', '[[', ']] ', '~ ', '``', '\'\'', ',,',
  0x20 => '@', '1', '2', '3', '4', '5', '6', '7', '8', '9', '', '', '', '', '', '',
  0x30 => '~', '+', '+', '+', '+', '', '@', ' // ', '+10+', '+20+', '+30+', null, null, null, '', '',
  0x40 => null, 'a', 'a', 'i', 'i', 'u', 'u', 'e', 'e', 'o', 'o', 'ka', 'ga', 'ki', 'gi', 'ku',
  0x50 => 'gu', 'ke', 'ge', 'ko', 'go', 'sa', 'za', 'si', 'zi', 'su', 'zu', 'se', 'ze', 'so', 'zo', 'ta',
  0x60 => 'da', 'ti', 'di', 'tu', 'tu', 'du', 'te', 'de', 'to', 'do', 'na', 'ni', 'nu', 'ne', 'no', 'ha',
  0x70 => 'ba', 'pa', 'hi', 'bi', 'pi', 'hu', 'bu', 'pu', 'he', 'be', 'pe', 'ho', 'bo', 'po', 'ma', 'mi',
  0x80 => 'mu', 'me', 'mo', 'ya', 'ya', 'yu', 'yu', 'yo', 'yo', 'ra', 'ri', 'ru', 're', 'ro', 'wa', 'wa',
  0x90 => 'wi', 'we', 'wo', 'n', 'vu', null, null, null, null, '', '', '', '', '"', '"', null,
  0xA0 => null, 'a', 'a', 'i', 'i', 'u', 'u', 'e', 'e', 'o', 'o', 'ka', 'ga', 'ki', 'gi', 'ku',
  0xB0 => 'gu', 'ke', 'ge', 'ko', 'go', 'sa', 'za', 'si', 'zi', 'su', 'zu', 'se', 'ze', 'so', 'zo', 'ta',
  0xC0 => 'da', 'ti', 'di', 'tu', 'tu', 'du', 'te', 'de', 'to', 'do', 'na', 'ni', 'nu', 'ne', 'no', 'ha',
  0xD0 => 'ba', 'pa', 'hi', 'bi', 'pi', 'hu', 'bu', 'pu', 'he', 'be', 'pe', 'ho', 'bo', 'po', 'ma', 'mi',
  0xE0 => 'mu', 'me', 'mo', 'ya', 'ya', 'yu', 'yu', 'yo', 'yo', 'ra', 'ri', 'ru', 're', 'ro', 'wa', 'wa',
  0xF0 => 'wi', 'we', 'wo', 'n', 'vu', 'ka', 'ke', 'va', 'vi', 've', 'vo', '', '', '"', '"', null,
];
