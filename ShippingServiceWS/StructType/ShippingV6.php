<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV6 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV6
 * @subpackage Structs
 */
class ShippingV6 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null;
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
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null;
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
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingV6
     * @uses ShippingV6::setEsdValue()
     * @uses ShippingV6::setHeaderValue()
     * @uses ShippingV6::setShipperValue()
     * @uses ShippingV6::setCustomerValue()
     * @uses ShippingV6::setRecipientValue()
     * @uses ShippingV6::setRefValue()
     * @uses ShippingV6::setSkybillValue()
     * @uses ShippingV6::setSkybillParamsValue()
     * @uses ShippingV6::setPassword()
     * @uses ShippingV6::setVersion()
     * @uses ShippingV6::setScheduledValue()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
     */
    public function setEsdValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null): self
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
     */
    public function setRefValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2|null
     */
    public function getSkybillValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
     */
    public function setSkybillValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null): self
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
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
    /**
     * Get scheduledValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV6
     */
    public function setScheduledValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
