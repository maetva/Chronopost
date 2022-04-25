<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEuropeResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEuropeResponse
 * @subpackage Structs
 */
class CreerEnlevementEuropeResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null;
    /**
     * Constructor method for creerEnlevementEuropeResponse
     * @uses CreerEnlevementEuropeResponse::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\CreerEnlevementEuropeResponse
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultPickupOrCollectionRequest $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
