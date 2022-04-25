<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithESDOnly StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithESDOnly
 * @subpackage Structs
 */
class ShippingWithESDOnly extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null;
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
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null;
    /**
     * The skybillParamsValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null;
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
     * Constructor method for shippingWithESDOnly
     * @uses ShippingWithESDOnly::setEsdValue()
     * @uses ShippingWithESDOnly::setHeaderValue()
     * @uses ShippingWithESDOnly::setShipperValue()
     * @uses ShippingWithESDOnly::setCustomerValue()
     * @uses ShippingWithESDOnly::setRecipientValue()
     * @uses ShippingWithESDOnly::setRefValue()
     * @uses ShippingWithESDOnly::setSkybillValue()
     * @uses ShippingWithESDOnly::setSkybillParamsValue()
     * @uses ShippingWithESDOnly::setPassword()
     * @uses ShippingWithESDOnly::setModeRetour()
     * @uses ShippingWithESDOnly::setVersion()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param string $version
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?string $version = null)
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
            ->setModeRetour($modeRetour)
            ->setVersion($version);
    }
    /**
     * Get esdValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue|null
     */
    public function getEsdValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
     */
    public function setEsdValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null): self
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
     */
    public function setRefValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue|null
     */
    public function getSkybillValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
     */
    public function setSkybillValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null): self
    {
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Get skybillParamsValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue|null
     */
    public function getSkybillParamsValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue
    {
        return $this->skybillParamsValue;
    }
    /**
     * Set skybillParamsValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
     */
    public function setSkybillParamsValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null): self
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithESDOnly
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
