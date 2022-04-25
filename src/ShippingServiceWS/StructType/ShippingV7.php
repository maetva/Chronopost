<?php

declare(strict_types=1);

namespace Maetva\Chronopost\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV7 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV7
 * @subpackage Structs
 */
class ShippingV7 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue $customsValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The modeRetour
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $modeRetour = null;
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
     * @var \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue|null
     */
    protected ?\Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingV7
     * @uses ShippingV7::setEsdValue()
     * @uses ShippingV7::setHeaderValue()
     * @uses ShippingV7::setShipperValue()
     * @uses ShippingV7::setCustomerValue()
     * @uses ShippingV7::setRecipientValue()
     * @uses ShippingV7::setRefValue()
     * @uses ShippingV7::setSkybillValue()
     * @uses ShippingV7::setSkybillParamsValue()
     * @uses ShippingV7::setCustomsValue()
     * @uses ShippingV7::setPassword()
     * @uses ShippingV7::setModeRetour()
     * @uses ShippingV7::setVersion()
     * @uses ShippingV7::setScheduledValue()
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue $esdValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue $esdValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue $customsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?\Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
            ->setCustomsValue($customsValue)
            ->setPassword($password)
            ->setModeRetour($modeRetour)
            ->setVersion($version)
            ->setScheduledValue($scheduledValue);
    }
    /**
     * Get esdValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue $esdValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setEsdValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\EsdValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setHeaderValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setShipperValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setCustomerValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setRecipientValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue|null
     */
    public function getRefValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $refValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setRefValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setSkybillValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setSkybillParamsValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue|null
     */
    public function getCustomsValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue $customsValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setCustomsValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\CustomsValue $customsValue = null): self
    {
        $this->customsValue = $customsValue;
        
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
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
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
     * Get modeRetour value
     * @return string|null
     */
    public function getModeRetour(): ?string
    {
        return $this->modeRetour;
    }
    /**
     * Set modeRetour value
     * @param string $modeRetour
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setModeRetour(?string $modeRetour = null): self
    {
        // validation for constraint: string
        if (!is_null($modeRetour) && !is_string($modeRetour)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modeRetour, true), gettype($modeRetour)), __LINE__);
        }
        $this->modeRetour = $modeRetour;
        
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
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
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
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     * @return \Maetva\Chronopost\ShippingServiceWS\StructType\ShippingV7
     */
    public function setScheduledValue(?\Maetva\Chronopost\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
