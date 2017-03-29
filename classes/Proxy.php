<?php
/**
 * Proxy class.
 */

namespace Alltube;

/**
 * Manage proxy objects.
 */
class Proxy
{
    /**
     * IP address.
     *
     * @var string
     */
    public $ip;

    /**
     * Port.
     *
     * @var int
     */
    public $port;

    /**
     * Protocol.
     *
     * @var string
     */
    public $protocol;

    /**
     * Proxy class constructor.
     *
     * @param string $ip       IP address
     * @param int    $port     Port
     * @param string $protocol Protocol
     */
    public function __construct($ip, $port, $protocol)
    {
        $this->ip = $ip;
        $this->port = (int) $port;
        $this->protocol = $protocol;
    }
}
