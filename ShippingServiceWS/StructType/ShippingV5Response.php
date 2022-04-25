<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5Response
 * @subpackage Structs
 */
class ShippingV5Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null;
    /**
     * Constructor method for shippingV5Response
     * @uses ShippingV5Response::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5Response
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
