<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/06/17
 * Time: 22:59
 */

namespace Miky\Component\Payment\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Resource\Model\ResourceInterface;

interface PaymentMethodInterface extends CommonModelInterface, ResourceInterface
{
    /**
     * @return string
     */
    public function getCode();

    /**
     * @param string $code
     * @return PaymentMethod
     */
    public function setCode($code);

    /**
     * @return string
     */
    public function getEnvironment();

    /**
     * @param string $environment
     * @return PaymentMethod
     */
    public function setEnvironment($environment);

    /**
     * @return int
     */
    public function getPosition();

    /**
     * @param int $position
     * @return PaymentMethodInterface
     */
    public function setPosition($position);

    /**
     * @return string
     */
    public function getLabel();

    /**
     * @param string $label
     * @return PaymentMethodInterface
     */
    public function setLabel($label);

    /**
     * @return array
     */
    public function getParameters();

    /**
     * @param array $parameters
     * @return PaymentMethodInterface
     */
    public function setParameters($parameters);
}