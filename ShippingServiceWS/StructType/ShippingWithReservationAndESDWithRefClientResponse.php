<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservationAndESDWithRefClientResponse
 * StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservationAndESDWithRefClientResponse
 * @subpackage Structs
 */
class ShippingWithReservationAndESDWithRefClientResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null;
    /**
     * Constructor method for shippingWithReservationAndESDWithRefClientResponse
     * @uses ShippingWithReservationAndESDWithRefClientResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservationAndESDWithRefClientResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
