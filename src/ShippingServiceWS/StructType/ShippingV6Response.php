<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6Response
 * @subpackage Structs
 */
class ShippingV6Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3 $return = null;
    /**
     * Constructor method for shippingV6Response
     * @uses ShippingV6Response::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3 $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3 $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV6Response
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultExpeditionValueV3 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
