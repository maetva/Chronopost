<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getReservedSkybillWithTypeAndModeByReservationResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:getReservedSkybillWithTypeAndModeByReservationResponse
 * @subpackage Structs
 */
class GetReservedSkybillWithTypeAndModeByReservationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null;
    /**
     * Constructor method for getReservedSkybillWithTypeAndModeByReservationResponse
     * @uses GetReservedSkybillWithTypeAndModeByReservationResponse::setReturn()
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillWithTypeAndModeByReservationResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillWithTypeValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
