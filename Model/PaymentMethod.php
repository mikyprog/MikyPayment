<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 27/06/17
 * Time: 22:56
 */

namespace Miky\Component\Payment\Model;


use Miky\Component\Core\Model\CommonModelInterface;
use Miky\Component\Core\Model\CommonModelTrait;

class PaymentMethod implements PaymentMethodInterface
{
    Use CommonModelTrait;

    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $environment;
    /**
     * @var int
     */
    protected $position;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * PaymentMethod constructor.
     */
    public function __construct()
    {
        $this->parameters = array();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return PaymentMethod
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     * @return PaymentMethod
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     * @return PaymentMethod
     */
    public function setPosition($position)
    {
        $this->position = $position;
        return $this;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return PaymentMethod
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param array $parameters
     * @return PaymentMethod
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
        return $this;
    }
}