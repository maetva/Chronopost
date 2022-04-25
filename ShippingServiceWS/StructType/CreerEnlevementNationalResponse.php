<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNationalResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNationalResponse
 * @subpackage Structs
 */
class CreerEnlevementNationalResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational $return = null;
    /**
     * Constructor method for creerEnlevementNationalResponse
     * @uses CreerEnlevementNationalResponse::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\CreerEnlevementNationalResponse
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultEnlevementNational $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
