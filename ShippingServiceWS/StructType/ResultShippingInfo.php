<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error $error
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error $error = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error|null
     */
    public function getError(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error $error
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo
     */
    public function setError(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\Error $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo|null
     */
    public function getShippingInfo(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo $shippingInfo
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo
     */
    public function setShippingInfo(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
