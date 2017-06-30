<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/06/17
 * Time: 23:18
 */

namespace Miky\Component\Payment\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Resource\Model\ResourceInterface;

interface PaymentInterface extends CommonModelInterface, ResourceInterface
{
    const STATE_CART = 'cart';
    const STATE_NEW = 'new';
    const STATE_PROCESSING = 'processing';
    const STATE_COMPLETED = 'completed';
    const STATE_FAILED = 'failed';
    const STATE_CANCELLED = 'cancelled';
    const STATE_REFUNDED = 'refunded';
    const STATE_UNKNOWN = 'unknown';

    /**
     * @return PaymentMethodInterface
     */
    public function getMethod();

    /**
     * @param null|PaymentMethodInterface $method
     */
    public function setMethod(PaymentMethodInterface $method = null);

    /**
     * @return string
     */
    public function getState();
    /**
     * @param string $state
     */
    public function setState($state);
    /**
     * @return string
     */
    public function getCurrencyCode();
    /**
     * @param string
     */
    public function setCurrencyCode($currencyCode);
    /**
     * @return int
     */
    public function getAmount();
    /**
     * @param int $amount
     */
    public function setAmount($amount);
    /**
     * @return array
     */
    public function getDetails();
    /**
     * @param array|\Traversable $details
     */
    public function setDetails($details);
}