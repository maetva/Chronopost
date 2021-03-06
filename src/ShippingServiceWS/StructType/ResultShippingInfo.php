<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultShippingInfo StructType
 * @subpackage Structs
 */
class ResultShippingInfo extends AbstractStructBase
{
    /**
     * The error
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\Error|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\Error $error = null;
    /**
     * The shippingInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null;
    /**
     * Constructor method for resultShippingInfo
     * @uses ResultShippingInfo::setError()
     * @uses ResultShippingInfo::setShippingInfo()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\Error $error
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo $shippingInfo
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\Error $error = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null)
    {
        $this
            ->setError($error)
            ->setShippingInfo($shippingInfo);
    }
    /**
     * Get error value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\Error|null
     */
    public function getError(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\Error
    {
        return $this->error;
    }
    /**
     * Set error value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\Error $error
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultShippingInfo
     */
    public function setError(?\Maetva\Chronopost\ShippingServiceWS\StructType\Error $error = null): self
    {
        $this->error = $error;
        
        return $this;
    }
    /**
     * Get shippingInfo value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo|null
     */
    public function getShippingInfo(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo
    {
        return $this->shippingInfo;
    }
    /**
     * Set shippingInfo value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo $shippingInfo
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ResultShippingInfo
     */
    public function setShippingInfo(?\Maetva\Chronopost\ShippingServiceWS\StructType\ShippingInfo $shippingInfo = null): self
    {
        $this->shippingInfo = $shippingInfo;
        
        return $this;
    }
}
