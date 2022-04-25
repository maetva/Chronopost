<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnlyV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnlyV2Response
 * @subpackage Structs
 */
class ShippingWithESDOnlyV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithESDOnlyV2Response
     * @uses ShippingWithESDOnlyV2Response::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingWithESDOnlyV2Response
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
