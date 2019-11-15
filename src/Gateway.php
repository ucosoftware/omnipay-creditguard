<?php

/**
 * CreditGuard Charge Gateway.
 */
namespace Omnipay\CreditGuard;

use Omnipay\CreditGuard\AbstractGateway;

/**
 * CreditGuard Charge Gateway.
 */
class Gateway extends AbstractGateway
{
    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'CreditGuard Charge';
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\DoDealRequest
     */
    public function doDealRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\DoDealRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\DoDealRedirectRequest
     */
    public function doDealRedirectRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\DoDealRedirectRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\CancelDealRequest
     */
    public function cancelDealRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\CancelDealRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\InquireTransactionsRequest
     */
    public function inquireTransactionsRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\InquireTransactionsRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\InquireMpiTransactionsRequest
     */
    public function inquireMpiTransactionsRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\InquireMpiTransactionsRequest', $parameters);
    }

    /**
     * @inheritdoc
     *
     * @return \Omnipay\CreditGuard\Message\RefundDealRequest
     */
    public function refundDealRequest(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\CreditGuard\Message\RefundDealRequest', $parameters);
    }
}
