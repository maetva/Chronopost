<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelResponse
 * @subpackage Structs
 */
class ShippingMultiParcelResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingMultiParcelResponse
     * @uses ShippingMultiParcelResponse::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingMultiParcelResponse
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMultiParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
