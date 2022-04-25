<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getShippingInformation StructType
 * Meta information extracted from the WSDL
 * - type: tns:getShippingInformation
 * @subpackage Structs
 */
class GetShippingInformation extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null;
    /**
     * The skybillValueBase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase $skybillValueBase = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for getShippingInformation
     * @uses GetShippingInformation::setHeaderValue()
     * @uses GetShippingInformation::setShipperValue()
     * @uses GetShippingInformation::setRecipientValue()
     * @uses GetShippingInformation::setSkybillValueBase()
     * @uses GetShippingInformation::setPassword()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase $skybillValueBase
     * @param string $password
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase $skybillValueBase = null, ?string $password = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setRecipientValue($recipientValue)
            ->setSkybillValueBase($skybillValueBase)
            ->setPassword($password);
    }
    /**
     * Get headerValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation
     */
    public function setHeaderValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation
     */
    public function setShipperValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation
     */
    public function setRecipientValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get skybillValueBase value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase|null
     */
    public function getSkybillValueBase(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase
    {
        return $this->skybillValueBase;
    }
    /**
     * Set skybillValueBase value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase $skybillValueBase
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation
     */
    public function setSkybillValueBase(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueBase $skybillValueBase = null): self
    {
        $this->skybillValueBase = $skybillValueBase;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\GetShippingInformation
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
