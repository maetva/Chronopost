<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingV5 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingV5
 * @subpackage Structs
 */
class ShippingV5 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null;
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
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null;
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
     * Constructor method for shippingV5
     * @uses ShippingV5::setEsdValue()
     * @uses ShippingV5::setHeaderValue()
     * @uses ShippingV5::setShipperValue()
     * @uses ShippingV5::setCustomerValue()
     * @uses ShippingV5::setRecipientValue()
     * @uses ShippingV5::setRefValue()
     * @uses ShippingV5::setSkybillValue()
     * @uses ShippingV5::setSkybillParamsValue()
     * @uses ShippingV5::setPassword()
     * @uses ShippingV5::setVersion()
     * @uses ShippingV5::setScheduledValue()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $version
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $recipientValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $version = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3|null
     */
    public function getEsdValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
     */
    public function setEsdValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdValue3 $esdValue = null): self
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
     */
    public function setRefValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $refValue = null): self
    {
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2|null
     */
    public function getSkybillValue(): ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2
    {
        return $this->skybillValue;
    }
    /**
     * Set skybillValue value
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
     */
    public function setSkybillValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillValueV2 $skybillValue = null): self
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingV5
     */
    public function setScheduledValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
