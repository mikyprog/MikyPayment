<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/06/17
 * Time: 23:24
 */

namespace Miky\Component\Payment\Model;


use Miky\Component\Core\Model\CommonModelTrait;
use Miky\Component\Resource\Exception\UnexpectedTypeException;
use Webmozart\Assert\Assert;

class Payment implements PaymentInterface
{
    Use CommonModelTrait;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var PaymentMethodInterface
     */
    protected $method;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var int
     */
    protected $amount = 0;
    /**
     * @var string
     */
    protected $state = PaymentInterface::STATE_CART;
    /**
     * @var array
     */
    protected $details = [];

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return $this->method;
    }
    /**
     * {@inheritdoc}
     */
    public function setMethod(PaymentMethodInterface $method = null)
    {
        $this->method = $method;
    }
    /**
     * {@inheritdoc}
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    /**
     * {@inheritdoc}
     */
    public function setCurrencyCode($currencyCode)
    {
        Assert::string($currencyCode);
        $this->currencyCode = $currencyCode;
    }
    /**
     * {@inheritdoc}
     */
    public function getAmount()
    {
        return $this->amount;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \InvalidArgumentException
     */
    public function setAmount($amount)
    {
        if (!is_int($amount)) {
            throw new \InvalidArgumentException('Amount must be an integer.');
        }
        $this->amount = $amount;
    }
    /**
     * {@inheritdoc}
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * {@inheritdoc}
     */
    public function setState($state)
    {
        $this->state = $state;
    }
    /**
     * {@inheritdoc}
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * {@inheritdoc}
     *
     * @throws UnexpectedTypeException
     */
    public function setDetails($details)
    {
        if ($details instanceof \Traversable) {
            $details = iterator_to_array($details);
        }
        if (!is_array($details)) {
            throw new UnexpectedTypeException($details, 'array');
        }
        $this->details = $details;
    }
}
