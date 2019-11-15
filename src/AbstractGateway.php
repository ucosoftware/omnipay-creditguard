<?php

/**
 * CreditGuard base gateway.
 */
namespace Omnipay\CreditGuard;

use Omnipay\Common\AbstractGateway as AbstractOmnipayGateway;
use Symfony\Component\HttpFoundation\ParameterBag;
use Omnipay\CreditGuard\Helper;

/**
 * CreditGuard Gateway.
 */
abstract class AbstractGateway extends AbstractOmnipayGateway
{
    /**
     * @inheritdoc
     */
    abstract public function getName();

    /**
     * Get the gateway parameters.
     *
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'url' => '',
            'user' => '',
            'password' => '',
            'terminalNumber' => '',
            'mid' => '',
        );
    }

    /**
     * Get the gateway URL.
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->getParameter('url');
    }

    /**
     * Set the gateway API Key.
     *
     * @param string $value
     *
     * @return Gateway provides a fluent interface.
     */
    public function setUrl($value)
    {
        return $this->setParameter('url', $value);
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUser()
    {
        return $this->getParameter('user');
    }

    /**
     * Set username.
     *
     * @param string $value
     *
     * @return Gateway provides a fluent interface.
     */
    public function setUser($value)
    {
        return $this->setParameter('user', $value);
    }

    /**
     * Get password.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->getParameter('password');
    }

    /**
     * Set password.
     *
     * @param string $value
     *
     * @return Gateway provides a fluent interface.
     */
    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    /**
     * Get terminal ID.
     *
     * @return string
     */
    public function getTerminalNumber()
    {
        return $this->getParameter('terminalNumber');
    }

    /**
     * Set terminal ID.
     *
     * @param string $value
     *
     * @return Gateway provides a fluent interface.
     */
    public function setTerminalNumber($value)
    {
        return $this->setParameter('terminalNumber', $value);
    }

    /**
     * Get merchant ID.
     *
     * @return string
     */
    public function getMid()
    {
        return $this->getParameter('mid');
    }

    /**
     * Set merchant ID.
     *
     * @param string $value
     *
     * @return Gateway provides a fluent interface.
     */
    public function setMid($value)
    {
        return $this->setParameter('mid', $value);
    }
}
