<?php

/*
 * This file is part of the WBWCURLLibrary package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\CURL\Request;

/**
 * CURL request interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Request
 */
interface CURLRequestInterface {

    /**
     * Method "DELETE".
     */
    const METHOD_DELETE = "DELETE";

    /**
     * Method "GET".
     */
    const METHOD_GET = "GET";

    /**
     * Method "HEAD".
     */
    const METHOD_HEAD = "HEAD";

    /**
     * Method "OPTIONS".
     */
    const METHOD_OPTIONS = "OPTIONS";

    /**
     * Method "PATCH".
     */
    const METHOD_PATCH = "PATCH";

    /**
     * Method "POST".
     */
    const METHOD_POST = "POST";

    /**
     * Method "PUT".
     */
    const METHOD_PUT = "PUT";

}
