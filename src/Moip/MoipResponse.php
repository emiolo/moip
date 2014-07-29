<?php

namespace Moip;
require_once 'MoipClient.php';
require_once 'MoipEnvironment.php';
require_once 'Moip.php';
/**
 * Read-only response
 * @property boolean|string $response
 * @property string $error
 * @property string $xml
 * @property string $payment_url
 * @property string $token
 */
class MoipResponse
{
    private $response;

    public function __construct(array $response)
    {
        $this->response = $response;
    }

    public function __get($name)
    {
        if (isset($this->response[$name])) {
            return $this->response[$name];
        }
        return null;
    }

}