<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeResponse
     * @uses GetReservedSkybillWithTypeAndModeResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
