<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformationResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformationResponse
 * @subpackage Structs
 */
class GetShippingInformationResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo $return = null;
    /**
     * Constructor method for getShippingInformationResponse
     * @uses GetShippingInformationResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformationResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultShippingInfo $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
