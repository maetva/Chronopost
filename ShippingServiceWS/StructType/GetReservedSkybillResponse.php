<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

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
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null;
    /**
     * Constructor method for getReservedSkybillResponse
     * @uses GetReservedSkybillResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetReservedSkybillResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultGetReservedSkybillValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
