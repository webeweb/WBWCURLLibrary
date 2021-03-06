<?php

/**
 * This file is part of the curl-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\CURL\Tests\Exception;

use PHPUnit_Framework_TestCase;
use WBW\Library\CURL\Exception\CURLInvalidArgumentException;

/**
 * cURL invalid argument exception test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Tests\Exception
 * @final
 */
final class CURLInvalidArgumentExceptionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $ex = new CURLInvalidArgumentException("exception");

        $res = "exception";
        $this->assertEquals($res, $ex->getMessage());
    }

}
