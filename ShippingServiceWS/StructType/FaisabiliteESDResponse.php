<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for faisabiliteESDResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:faisabiliteESDResponse
 * @subpackage Structs
 */
class FaisabiliteESDResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null;
    /**
     * Constructor method for faisabiliteESDResponse
     * @uses FaisabiliteESDResponse::setReturn()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD|null
     */
    public function getReturn(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\FaisabiliteESDResponse
     */
    public function setReturn(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ResultFaisabiliteESD $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
