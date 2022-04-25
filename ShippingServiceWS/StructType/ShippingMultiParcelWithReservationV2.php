<?php

declare(strict_types=1);

namespace Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for shippingMultiParcelWithReservationV2 StructType
 * Meta information extracted from the WSDL
 * - type: tns:shippingMultiParcelWithReservationV2
 * @subpackage Structs
 */
class ShippingMultiParcelWithReservationV2 extends AbstractStructBase
{
    /**
     * The esdValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null;
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
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[]
     */
    protected ?array $recipientValue = null;
    /**
     * The refValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[]
     */
    protected ?array $refValue = null;
    /**
     * The skybillValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2[]
     */
    protected ?array $skybillValue = null;
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
     * @var \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    protected ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null;
    /**
     * Constructor method for shippingMultiParcelWithReservationV2
     * @uses ShippingMultiParcelWithReservationV2::setEsdValue()
     * @uses ShippingMultiParcelWithReservationV2::setHeaderValue()
     * @uses ShippingMultiParcelWithReservationV2::setShipperValue()
     * @uses ShippingMultiParcelWithReservationV2::setCustomerValue()
     * @uses ShippingMultiParcelWithReservationV2::setRecipientValue()
     * @uses ShippingMultiParcelWithReservationV2::setRefValue()
     * @uses ShippingMultiParcelWithReservationV2::setSkybillValue()
     * @uses ShippingMultiParcelWithReservationV2::setSkybillParamsValue()
     * @uses ShippingMultiParcelWithReservationV2::setPassword()
     * @uses ShippingMultiParcelWithReservationV2::setModeRetour()
     * @uses ShippingMultiParcelWithReservationV2::setNumberOfParcel()
     * @uses ShippingMultiParcelWithReservationV2::setVersion()
     * @uses ShippingMultiParcelWithReservationV2::setMultiParcel()
     * @uses ShippingMultiParcelWithReservationV2::setScheduledValue()
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[] $refValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue
     * @param string $password
     * @param string $modeRetour
     * @param int $numberOfParcel
     * @param string $version
     * @param string $multiParcel
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     */
    public function __construct(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\HeaderValue $headerValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShipperValue $shipperValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null, ?array $recipientValue = null, ?array $refValue = null, ?array $skybillValue = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillParamsValue $skybillParamsValue = null, ?string $password = null, ?string $modeRetour = null, ?int $numberOfParcel = null, ?string $version = null, ?string $multiParcel = null, ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null)
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue|null
     */
    public function getEsdValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue
    {
        return $this->esdValue;
    }
    /**
     * Set esdValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function setEsdValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\EsdWithRefClientValue $esdValue = null): self
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function setCustomerValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\CustomerValue $customerValue = null): self
    {
        $this->customerValue = $customerValue;
        
        return $this;
    }
    /**
     * Get recipientValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[]
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
        foreach ($values as $shippingMultiParcelWithReservationV2RecipientValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RecipientValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RecipientValueItem) ? get_class($shippingMultiParcelWithReservationV2RecipientValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RecipientValueItem), var_export($shippingMultiParcelWithReservationV2RecipientValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set recipientValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue[] $recipientValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function addToRecipientValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue) {
            throw new InvalidArgumentException(sprintf('The recipientValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RecipientValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->recipientValue[] = $item;
        
        return $this;
    }
    /**
     * Get refValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[]
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
        foreach ($values as $shippingMultiParcelWithReservationV2RefValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2RefValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2RefValueItem) ? get_class($shippingMultiParcelWithReservationV2RefValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2RefValueItem), var_export($shippingMultiParcelWithReservationV2RefValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The refValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set refValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue[] $refValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function addToRefValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue) {
            throw new InvalidArgumentException(sprintf('The refValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\RefValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->refValue[] = $item;
        
        return $this;
    }
    /**
     * Get skybillValue value
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2[]
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
        foreach ($values as $shippingMultiParcelWithReservationV2SkybillValueItem) {
            // validation for constraint: itemType
            if (!$shippingMultiParcelWithReservationV2SkybillValueItem instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2) {
                $invalidValues[] = is_object($shippingMultiParcelWithReservationV2SkybillValueItem) ? get_class($shippingMultiParcelWithReservationV2SkybillValueItem) : sprintf('%s(%s)', gettype($shippingMultiParcelWithReservationV2SkybillValueItem), var_export($shippingMultiParcelWithReservationV2SkybillValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set skybillValue value
     * @throws InvalidArgumentException
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2[] $skybillValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2 $item
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function addToSkybillValue(\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2 $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2) {
            throw new InvalidArgumentException(sprintf('The skybillValue property can only contain items of type \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\SkybillWithDimensionsValueV2, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->skybillValue[] = $item;
        
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
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
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue|null
     */
    public function getScheduledValue(): ?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue
    {
        return $this->scheduledValue;
    }
    /**
     * Set scheduledValue value
     * @param \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue
     * @return \Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ShippingMultiParcelWithReservationV2
     */
    public function setScheduledValue(?\Maetva\Chronopost\Endpoint\ShippingServiceWS\StructType\ScheduledValue $scheduledValue = null): self
    {
        $this->scheduledValue = $scheduledValue;
        
        return $this;
    }
}
