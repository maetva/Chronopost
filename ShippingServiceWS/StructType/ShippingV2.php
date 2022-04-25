<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV2
 * @subpackage Structs
 */
class ShippingV2 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null;
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
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * Constructor method for shippingV2
     * @uses ShippingV2::setEsdValue()
     * @uses ShippingV2::setHeaderValue()
     * @uses ShippingV2::setShipperValue()
     * @uses ShippingV2::setCustomerValue()
     * @uses ShippingV2::setRecipientValue()
     * @uses ShippingV2::setRefValue()
     * @uses ShippingV2::setSkybillValue()
     * @uses ShippingV2::setSkybillParamsValue()
     * @uses ShippingV2::setPassword()
     * @uses ShippingV2::setVersion()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null)
    {
        $this
            ->setEsdValue($esdValue)
            ->setHeaderValue($headerValue)
            ->setShipperValue($shipperValue)
            ->setCustomerValue($customerValue)
            ->setRecipientValue($recipientValue)
            ->setRefValue($refValue)
            ->setSkybillValue($skybillValue)
            ->setSkybillParamsValue($skybillParamsValue)
            ->setPassword($password)
            ->setVersion($version);
    }
    /**
     * Get esdValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setEsdValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setShipperValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setCustomerValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setRecipientValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue|null
     */
    public function getRefValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setRefValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue|null
     */
    public function getSkybillValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setSkybillValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setSkybillParamsValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
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
    /**
     * Get version value
     * @return string|null
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }
    /**
     * Set version value
     * @param string $version
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV2
     */
    public function setVersion(?string $version = null): self
    {
        // validation for constraint: string
        if (!is_null($version) && !is_string($version)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($version, true), gettype($version)), __LINE__);
        }
        $this->version = $version;
        
        return $this;
    }
}
