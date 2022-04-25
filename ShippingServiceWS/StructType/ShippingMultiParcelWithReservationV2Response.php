<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2Response
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationV2Response
     * @uses ShippingMultiParcelWithReservationV2Response::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2 $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2Response
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultReservationMultiParcelExpeditionValueV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
