<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillResponse
 * @subpackage Structs
 */
class GetReservedSkybillResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse
     */
    public function setReturn(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
