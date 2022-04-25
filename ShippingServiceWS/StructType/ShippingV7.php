<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

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
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null;
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null;
    /**
     * The shipperValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null;
    /**
     * The customerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null;
    /**
     * The recipientValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null;
    /**
     * The customsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $customsValue = null;
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
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null;
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
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $customsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $customsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue|null
     */
    public function getEsdValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setEsdValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null): self
    {
        $this->esdValue = $esdValue;
        
        return $this;
    }
    /**
     * Get headerValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setHeaderValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get shipperValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue|null
     */
    public function getShipperValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue
    {
        return $this->shipperValue;
    }
    /**
     * Set shipperValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setShipperValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null): self
    {
        $this->shipperValue = $shipperValue;
        
        return $this;
    }
    /**
     * Get customerValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue|null
     */
    public function getCustomerValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue
    {
        return $this->customerValue;
    }
    /**
     * Set customerValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setCustomerValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue|null
     */
    public function getRecipientValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue
    {
        return $this->recipientValue;
    }
    /**
     * Set recipientValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setRecipientValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null): self
    {
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue|null
     */
    public function getRefValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue
    {
        return $this->refValue;
    }
    /**
     * Set refValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setRefValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3|null
     */
    public function getSkybillValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setSkybillValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV3 $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2|null
     */
    public function getSkybillParamsValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setSkybillParamsValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValueV2 $skybillParamsValue = null): self
    {
        $this->skybillParamsValue = $skybillParamsValue;
        
        return $this;
    }
    /**
     * Get customsValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue|null
     */
    public function getCustomsValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue
    {
        return $this->customsValue;
    }
    /**
     * Set customsValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $customsValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setCustomsValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomsValue $customsValue = null): self
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV7
     */
    public function setScheduledValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
