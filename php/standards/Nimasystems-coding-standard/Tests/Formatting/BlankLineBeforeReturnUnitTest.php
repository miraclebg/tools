<?php
/**
 * This file is part of the NimasystemsGeneric-coding-standard (phpcs standard)
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CodeSniffer-NimasystemsGeneric
 * @author   NimasystemsGeneric-phpcs-authors <NimasystemsGeneric-coding-standard@opensky.github.com>
 * @license  http://spdx.org/licenses/MIT MIT License
 * @version  GIT: master
 * @link     https://github.com/opensky/NimasystemsGeneric-coding-standard
 */

/**
 * Unit test class for the BlankLineBeforeReturn sniff.
 *
 * A sniff unit test checks a .inc file for expected violations of a single
 * coding standard. Expected errors and warnings are stored in this class.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Tom Klingenberg <tklingenberg@lastflood.net>
 * @copyright 2012 Tom Klingenberg, some rights reserved.
 * @license   http://spdx.org/licenses/MIT MIT License
 * @link      https://github.com/opensky/NimasystemsGeneric-coding-standard
 */
class NimasystemsGeneric_Tests_Formatting_BlankLineBeforeReturnUnitTest extends AbstractSniffUnitTest
{
    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getErrorList()
    {
        return array(
            23 => 1,
        );

    }

    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @return array(int => int)
     */
    public function getWarningList()
    {
        return array();

    }
}