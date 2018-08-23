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

use WBW\Library\CURL\Response\CURLResponse;

/**
 * cURL request call exception.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\CURL\Exception
 */
class CURLRequestCallException extends AbstractCURLException {

    /**
     * cURL response.
     *
     * @var CURLResponse
     */
    private $response;

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param CURLResponse $response The response.
     */
    public function __construct($message, $code, CURLResponse $response) {
        parent::__construct($message, $code);
        $this->setResponse($response);
    }

    /**
     * Get the response.
     *
     * @return CURLResponse Returns the response.
     */
    public function getResponse() {
        return $this->response;
    }

    /**
     * Set the response.
     *
     * @param CURLResponse $response The response.
     * @return CURLRequestCallException Returns this request call exception.
     */
    protected function setResponse(CURLResponse $response) {
        $this->response = $response;
        return $this;
    }

}
