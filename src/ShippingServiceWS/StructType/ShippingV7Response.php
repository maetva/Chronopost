<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7Response
 * @subpackage Structs
 */
class ShippingV7Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue $return = null;
    /**
     * Constructor method for shippingV7Response
     * @uses ShippingV7Response::setReturn()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue $return
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue|null
     */
    public function getReturn(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue $return
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7Response
     */
    public function setReturn(?\Maetva\Chronopost\ShippingServiceWS\StructType\ResultMonoParcelExpeditionValue $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
