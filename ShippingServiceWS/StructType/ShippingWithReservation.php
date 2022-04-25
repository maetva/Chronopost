<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingWithReservation StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingWithReservation
 * @subpackage Structs
 */
class ShippingWithReservation extends AbstractStructBase
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
     * Constructor method for shippingWithReservation
     * @uses ShippingWithReservation::setEsdValue()
     * @uses ShippingWithReservation::setHeaderValue()
     * @uses ShippingWithReservation::setShipperValue()
     * @uses ShippingWithReservation::setCustomerValue()
     * @uses ShippingWithReservation::setRecipientValue()
     * @uses ShippingWithReservation::setRefValue()
     * @uses ShippingWithReservation::setSkybillValue()
     * @uses ShippingWithReservation::setSkybillParamsValue()
     * @uses ShippingWithReservation::setPassword()
     * @uses ShippingWithReservation::setModeRetour()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue $esdValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValue $skybillValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null)
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
            ->setModeRetour($modeRetour);
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingWithReservation
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
}
