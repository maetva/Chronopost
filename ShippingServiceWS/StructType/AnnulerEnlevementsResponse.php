<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for annulerEnlevementsResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:annulerEnlevementsResponse
 * @subpackage Structs
 */
class AnnulerEnlevementsResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null;
    /**
     * Constructor method for annulerEnlevementsResponse
     * @uses AnnulerEnlevementsResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\AnnulerEnlevementsResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultAnnulerEnlevement $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
