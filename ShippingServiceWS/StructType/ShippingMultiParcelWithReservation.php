<?php

declare(strict_types=1);

namespace Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservation StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservation
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservation extends AbstractStructBase
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue[]
     */
    protected ?array $skybillValue = null;
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
     * The numberOfParcel
     * @var int|null
     */
    protected ?int $numberOfParcel = null;
    /**
     * The version
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $version = null;
    /**
     * The multiParcel
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $multiParcel = null;
    /**
     * The scheduledValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    protected ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingMultiParcelWithReservation
     * @uses ShippingMultiParcelWithReservation::setEsdValue()
     * @uses ShippingMultiParcelWithReservation::setHeaderValue()
     * @uses ShippingMultiParcelWithReservation::setShipperValue()
     * @uses ShippingMultiParcelWithReservation::setCustomerValue()
     * @uses ShippingMultiParcelWithReservation::setRecipientValue()
     * @uses ShippingMultiParcelWithReservation::setRefValue()
     * @uses ShippingMultiParcelWithReservation::setSkybillValue()
     * @uses ShippingMultiParcelWithReservation::setSkybillParamsValue()
     * @uses ShippingMultiParcelWithReservation::setPassword()
     * @uses ShippingMultiParcelWithReservation::setModeRetour()
     * @uses ShippingMultiParcelWithReservation::setNumberOfParcel()
     * @uses ShippingMultiParcelWithReservation::setVersion()
     * @uses ShippingMultiParcelWithReservation::setMultiParcel()
     * @uses ShippingMultiParcelWithReservation::setScheduledValue()
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[] $refValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue[] $skybillValue
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
            ->setNumberOfParcel($numberOfParcel)
            ->setVersion($version)
            ->setMultiParcel($multiParcel)
            ->setScheduledValue($scheduledValue);
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setCustomerValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[]
     */
    public function getRecipientValue(): ?array
    {
        return $this->recipientValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRecipientValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRecipientValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRecipientValueForArrayConstraintsFromSetRecipientValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationRecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationRecipientValueItem instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationRecipientValueItem) ? get_class($shippingMultiParcelWithReservationRecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationRecipientValueItem), var_export($shippingMultiParcelWithReservationRecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setRecipientValue(?array $recipientValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($recipientValueArrayErrorMessage = self::validateRecipientValueForArrayConstraintsFromSetRecipientValue($recipientValue))) {
            throw new InvalidArgumentException($recipientValueArrayErrorMessage, __LINE__);
        }
        $this->recipientValue = $recipientValue;
        
        return $this;
    }
    /**
     * Add item to recipientValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $item
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function addToRecipientValue(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[]
     */
    public function getRefValue(): ?array
    {
        return $this->refValue;
    }
    /**
     * This method is responsible for validating the values passed to the setRefValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRefValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRefValueForArrayConstraintsFromSetRefValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationRefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationRefValueItem instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationRefValueItem) ? get_class($shippingMultiParcelWithReservationRefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationRefValueItem), var_export($shippingMultiParcelWithReservationRefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[] $refValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setRefValue(?array $refValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($refValueArrayErrorMessage = self::validateRefValueForArrayConstraintsFromSetRefValue($refValue))) {
            throw new InvalidArgumentException($refValueArrayErrorMessage, __LINE__);
        }
        $this->refValue = $refValue;
        
        return $this;
    }
    /**
     * Add item to refValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $item
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function addToRefValue(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue[]
     */
    public function getSkybillValue(): ?array
    {
        return $this->skybillValue;
    }
    /**
     * This method is responsible for validating the values passed to the setSkybillValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSkybillValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSkybillValueForArrayConstraintsFromSetSkybillValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $shippingMultiParcelWithReservationSkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationSkybillValueItem instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationSkybillValueItem) ? get_class($shippingMultiParcelWithReservationSkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationSkybillValueItem), var_export($shippingMultiParcelWithReservationSkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue[] $skybillValue
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setSkybillValue(?array $skybillValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($skybillValueArrayErrorMessage = self::validateSkybillValueForArrayConstraintsFromSetSkybillValue($skybillValue))) {
            throw new InvalidArgumentException($skybillValueArrayErrorMessage, __LINE__);
        }
        $this->skybillValue = $skybillValue;
        
        return $this;
    }
    /**
     * Add item to skybillValue value
     * @throws InvalidArgumentException
     * @param \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue $item
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function addToSkybillValue(\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * Get numberOfParcel value
     * @return int|null
     */
    public function getNumberOfParcel(): ?int
    {
        return $this->numberOfParcel;
    }
    /**
     * Set numberOfParcel value
     * @param int $numberOfParcel
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setNumberOfParcel(?int $numberOfParcel = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfParcel) && !(is_int($numberOfParcel) || ctype_digit($numberOfParcel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfParcel, true), gettype($numberOfParcel)), __LINE__);
        }
        $this->numberOfParcel = $numberOfParcel;
        
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
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
     * Get multiParcel value
     * @return string|null
     */
    public function getMultiParcel(): ?string
    {
        return $this->multiParcel;
    }
    /**
     * Set multiParcel value
     * @param string $multiParcel
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setMultiParcel(?string $multiParcel = null): self
    {
        // validation for constraint: string
        if (!is_null($multiParcel) && !is_string($multiParcel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($multiParcel, true), gettype($multiParcel)), __LINE__);
        }
        $this->multiParcel = $multiParcel;
        
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
     * @return \Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservation
     */
    public function setScheduledValue(?\Drupal\commerce_chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
