<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndModeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
