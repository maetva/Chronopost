<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelV4Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelV4Response
 * @subpackage Structs
 */
class ShippingMultiParcelV4Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelV4Response
     * @uses ShippingMultiParcelV4Response::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelV4Response
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
