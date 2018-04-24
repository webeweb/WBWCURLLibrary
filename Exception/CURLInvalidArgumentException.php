<?php

/**
 * This file is part of the curl-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\CURL\Exception;

/**
 * cURL invalid argument exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Exception
 */
class CURLInvalidArgumentException extends AbstractCURLException {

    /**
     * Constructor.
     *
     * @param string $message The message.
     */
    public function __construct($message) {
        parent::__construct($message);
    }

}
